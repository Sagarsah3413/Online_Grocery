//variable list
let container = document.querySelector('#slider');
let images = document.querySelectorAll('#slider img');

let prev = document.getElementById('prev');
let next = document.getElementById('next');

let count = 1;
let width = images[0].clientWidth;
//vaiablelist end


//slider setting
window.addEventListener('resize', () => {
    width = images[0].clientWidth;
    container.style.transition = "none";
    console.log(width);
    container.style.transform = 'translateX(' + (-width * count) + 'px';
})

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

//slider setting end


//variable list start
var send = "";
var sen = "";
//variable list end
//cart anniamation start
let cart = document.querySelectorAll('div#items');
for (let i = 0; i < cart.length; i++) {
    let ch = cart[i].lastElementChild;

    ch.addEventListener('click', () => {
        if (ch.lastElementChild.innerHTML = "Add To Cart") {
            send += '<div id="items">' + cart[i].innerHTML + '</div>';
            ch.lastElementChild.innerHTML = "Remove From Cart"
        }
        if (ch.lastElementChild.innerHTML = "Remove From Cart") {
            sen += '<div id="items">' + cart[i].innerHTML + '</div>';
            ch.lastElementChild.innerHTML = "Add to Cart"
        }
    })
}
localStorage.setItem("sendd", send);
localStorage.setItem("senn", sen);