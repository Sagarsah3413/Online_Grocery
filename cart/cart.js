let car = document.querySelector('body table');
let tot=document.querySelector("div#total span");
let sum=0;   
var fav=JSON.parse(sessionStorage.getItem('fav'));
var prop=Object.getOwnPropertyNames(fav);
for(let i=0;i<prop.length;i++)
{
    var str=document.createElement('tr');
    str.innerHTML="<td><img src='../home/images/down.png' alt=''><span>"+fav[prop[i]].name+
    "</span></td><td><button class='minus'>-</button><input type='number' min='0' value='"+fav[prop[i]].quantity+
    "'><button class='plus'>+</button></td><td>Rs."+fav[prop[i]].rate+"</td><td>Rs."+
    fav[prop[i]].quantity*fav[prop[i]].rate+"</td>";
    car.append(str);
    sum+=fav[prop[i]].quantity*fav[prop[i]].rate;
}
tot.innerHTML=sum;

// sessionStorage.setItem('index', 'value');
// sessionStorage.setItem('index1', 'value1');

// for (let i = 0; i < sessionStorage.length; i++) {
//     console.log(sessionStorage.getItem(sessionStorage.key(i)));

// }

let plus = document.querySelectorAll('.plus');
let minus = document.querySelectorAll('.minus');
let input;
// console.log(minus);

for (let i = 0; i < plus.length; i++) {
    input = plus[i].parentElement.children[1];
    input.addEventListener('input',()=>{
        input = plus[i].parentElement.children[1];
        fav[prop[i]].quantity=input.value;
        sessionStorage.setItem("fav", JSON.stringify(fav));
    });
    plus[i].addEventListener('click', () => {
        input = plus[i].parentElement.children[1];
        input.value++;
        fav[prop[i]].quantity=input.value;
        sessionStorage.setItem("fav", JSON.stringify(fav));
    });

    minus[i].addEventListener('click', () => {
        input = plus[i].parentElement.children[1];
        if (input.value > 1)
        {
            input.value--;
            fav[prop[i]].quantity=input.value;
        }    
        else {
            delete fav[prop[i]];
            car.children[i].style.display="none";
        }
        sessionStorage.setItem("fav", JSON.stringify(fav));
    });
    console.log(fav);
}

// console.log(sessionStorage.key);

// let xhr = new XMLHttpRequest();

// window.addEventListener('load', () => {
//     xhr.open('GET', 'retrieve.php', true);

//     xhr.onreadystatechange = function() {
//         if (xhr.readyState === 4) {

//         };
//     };
// });