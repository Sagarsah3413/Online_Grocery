let car = document.querySelector('body table');
let tot = document.querySelector("div#total span");
let sum = 0;
let fav = new Object;
if (sessionStorage.getItem('fav') != null)
    fav = JSON.parse(sessionStorage.getItem('fav'));
var prop = Object.getOwnPropertyNames(fav);

for (let i = 0; i < prop.length; i++) {
    if (fav[prop[i]].quantity > 0) {
        var str = document.createElement('tr');
        str.innerHTML = `<td id='${prop[i]}'><img src='' alt='loading image' ><span>` + fav[prop[i]].name +
            "</span></td><td><button class='minus'>-</button><input type='number' class='quantize' min='0' value='" + fav[prop[i]].quantity +
            "'><button class='plus'>+</button></td><td>Rs." + fav[prop[i]].rate + "</td><td>Rs.<span>" +
            fav[prop[i]].quantity * fav[prop[i]].rate + "</span></td>";
        car.append(str);
        sum += fav[prop[i]].quantity * fav[prop[i]].rate;
    } else {
        delete fav[prop[i]];
        sessionStorage.setItem("fav", JSON.stringify(fav));
    }
}
tot.innerHTML = sum;


let plus = document.querySelectorAll('.plus');
let minus = document.querySelectorAll('.minus');
let input, each, held;
let bat = document.querySelectorAll('tr');
str = divsArr = [].slice.call(bat);
str.shift();

function up(i) {
    each = str[i].lastElementChild.lastElementChild;
    held = parseInt(input.value);
    input.value = held;
    each.innerHTML = Number(each.innerHTML) - ((Number(fav[prop[i]].quantity) - Number(input.value)) * Number(fav[prop[i]].rate));
    tot.innerHTML = Number(tot.innerHTML) - ((Number(fav[prop[i]].quantity) - Number(input.value)) * Number(fav[prop[i]].rate));
    fav[prop[i]].quantity = input.value;
}
for (let i = 0; i < plus.length; i++) {
    input = plus[i].parentElement.children[1];
    input.addEventListener('input', () => {
        input = plus[i].parentElement.children[1];
        up(i);
        sessionStorage.setItem("fav", JSON.stringify(fav));
        document.getElementById("index").innerHTML=Object.keys(fav).length;
    });
    input.addEventListener('blur', () => {
        input = plus[i].parentElement.children[1];
        if (input.value < 1) {
            delete fav[prop[i]];
            car.children[i + 1].style.display = "none";
        }
        sessionStorage.setItem("fav", JSON.stringify(fav));
        document.getElementById("index").innerHTML=Object.keys(fav).length;
    });
    plus[i].addEventListener('click', () => {
        input = plus[i].parentElement.children[1];
        input.value++;
        up(i);
        sessionStorage.setItem("fav", JSON.stringify(fav));
    });

    minus[i].addEventListener('click', () => {
        input = plus[i].parentElement.children[1];
        if (input.value > 0)
            input.value--;
        up(i);
        if (input.value < 1) {
            delete fav[prop[i]];
            car.children[i + 1].style.display = "none";
        }
        sessionStorage.setItem("fav", JSON.stringify(fav));
        document.getElementById("index").innerHTML=Object.keys(fav).length;
    });
}