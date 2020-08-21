//variable list
let container = document.querySelector('#slider');
let images = document.querySelectorAll('#slider div');
let prev = document.getElementById('prev');
let next = document.getElementById('next');
let count = 1;
let width = images[0].clientWidth;
let height = images[0].clientHeight;
let time = performance.now();
let elapsed;
//vaiablelist end

//slider setting
window.addEventListener('resize', () => {
    width = images[0].clientWidth;
    container.style.transition = "none";
    container.style.transform = 'translateX(' + (-width * count) + 'px';
})
container.style.height = height + 'px';
container.style.transform = 'translateX(' + (-width * count) + 'px';
var tim = setInterval(fwd, 5000);

function fwd() {
    if (count >= images.length - 1)
        return;
    container.style.transition = "transform 0.3s ease-in-out";
    count++;
    container.style.transform = 'translateX(' + (-width * count) + 'px';
}

function pre() {
    if (count <= 0)
        return;
    container.style.transition = "transform 0.3s ease-in-out";
    count--;
    container.style.transform = 'translateX(' + (-width * count) + 'px';
}
next.addEventListener('click', () => {
    clearInterval(tim);
    tim = setInterval(fwd, 5000);
    fwd();
});
prev.addEventListener('click', () => {
    clearInterval(tim);
    tim = setInterval(pre, 5000);
    pre();
});

container.addEventListener('transitionend', () => {
    if (images[count] === container.firstElementChild) {
        container.style.transition = "none";
        count = images.length - 2;
        container.style.transform = 'translateX(' + (-width * count) + 'px';
    } else if (images[count] === container.lastElementChild) {
        container.style.transition = "none";
        count = 1;
        container.style.transform = 'translateX(' + (-width * count) + 'px';
    }
});
// function arrayRemove(arr) {
//     return arr.filter(
//         function(ele) {
//             return ele.quantity >0;
//         }
//     );
// };  
// function find(arr,val) {
//     return arr.findIndex(
//         function(ele) {
//             return ele.productid ==val;
//         }
//     );
// }; 
function Person(productid, name, quantity, rate) {
    this.productid = productid;
    this.name = name;
    this.quantity = quantity;
    this.rate = rate;
}
let send = new Object;
if (sessionStorage.getItem('fav') != null)
    send = JSON.parse(sessionStorage.getItem('fav'));
let buy = document.querySelectorAll("div.grid div.items div.cart article");
let plus, minus, quantity;
let add = document.querySelectorAll("div.grid div.items div.cart p");
let cart = document.querySelectorAll("div.items");

for (let i = 0; i < buy.length; i++) {
    plus = buy[i].lastElementChild;
    minus = buy[i].firstElementChild;
    quantity = buy[i].children[1];
    let name = cart[i].children[1].innerText;
    let rate = cart[i].children[2].firstElementChild.innerHTML;
    let productid = cart[i].lastElementChild.id;

    function hide(x, val1, val2) {
        x.style.height = val1;
        x.style.overflow = val2;
        x.style.transition = 'width 0.3s linear ';
    }
    hide(buy[i], "0px", "hidden");
    if (send[`${productid}`]) {
        quantity.innerHTML = send[`${productid}`].quantity;
        hide(add[i], "0px", "hidden");
        hide(buy[i], "30px", "");
    }
    add[i].addEventListener('click', () => {
        quantity = buy[i].children[1];
        quantity.innerHTML++;
        if (quantity.innerHTML > 0) {
            hide(add[i], "0px", "hidden");
            hide(buy[i], "30px", "");
        }
        send[`${productid}`] = new Person(productid, name, quantity.innerHTML, rate);
        sessionStorage.setItem("fav", JSON.stringify(send));
    });

    plus.addEventListener('click', () => {
        quantity = buy[i].children[1];
        quantity.innerHTML++;
        send[`${productid}`].quantity++;
        sessionStorage.setItem("fav", JSON.stringify(send));
    });
    minus.addEventListener('click', () => {
        quantity = buy[i].children[1];
        if (quantity.innerHTML > 1) {
            quantity.innerHTML--;
            send[`${productid}`].quantity--;
        } else {
            quantity.innerHTML--;
            hide(buy[i], "0px", "hidden");
            hide(add[i], "auto", "");
            delete send[`${productid}`];
        }
        sessionStorage.setItem("fav", JSON.stringify(send));
    });
}