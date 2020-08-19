//variable list
let container = document.querySelector('#slider');
let images = document.querySelectorAll('#slider div');

let prev = document.getElementById('prev');
let next = document.getElementById('next');

let count = 1;
let width = images[0].clientWidth;
let height = images[0].clientHeight;
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

//quantity addition

function arrayRemove(arr, value) {
    return arr.filter(
        function(ele) {
            return ele[1] != value;
        }
    );
};
var send = [];
console.log(send);
let cart = document.querySelectorAll('div.items');
console.log(cart[0].innerHTML);
let price = document.querySelectorAll('p');
for (let i = 0; i < cart.length; i++) {
    let ch = cart[i].lastElementChild.lastElementChild.lastElementChild;
    ch.addEventListener('click', function() {
        if (ch.innerText === "Add To Cart") {
            ch.innerText = "Remove From Cart";
            send.push(['<div class="items">' + cart[i].innerHTML + '</div>', cart[i].lastElementChild.id, price[i * 2].innerText, ]);
        } else {
            ch.innerText = "Add To Cart";
            sen = arrayRemove(send, cart[i].lastElementChild.id);
            send = sen;
        }
        sessionStorage.setItem("fav", send);
        console.log(send);
    })
};
localStorage.setItem('localvar', JSON.stringify(document.getElementById('image')));
console.log(JSON.parse(localStorage.getItem('localvar')));
//quantity addition

let buy = document.querySelectorAll("div.grid div.items div.cart article");
let plus, minus, quantity;
let add = document.querySelectorAll("div.grid div.items div.cart p");
let xml = new XMLHttpRequest();
for (let i = 0; i < buy.length; i++) {
    plus = buy[i].lastElementChild;
    minus = buy[i].firstElementChild;
    quantity = buy[i].children[1];

    function hide(x, val1, val2) {
        x.style.height = val1;
        x.style.overflow = val2;
        x.style.transition = 'display 0.3s linear ';
    }
    hide(buy[i], "0px", "hidden");
    add[i].addEventListener('click', () => {
        quantity.innerHTML++;
        if (quantity.innerHTML > 0) {
            hide(add[i], "0px", "hidden");
            hide(buy[i], "30px", "");
        }
    });
    plus.addEventListener('click', () => {
        quantity = buy[i].children[1];
        quantity.innerHTML++;
    });

    minus.addEventListener('click', () => {
        quantity = buy[i].children[1];
        if (quantity.innerHTML > 1) {
            quantity.innerHTML--;
        } else {
            quantity.innerHTML--;
            hide(buy[i], "0px", "hidden");
            hide(add[i], "auto", "");
        }
    });
}