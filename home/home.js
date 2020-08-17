let container = document.querySelector('#slider');
let images = document.querySelectorAll('#slider img');

let prev = document.getElementById('prev');
let next = document.getElementById('next');

let count = 1;
let width = images[0].clientWidth;
window.addEventListener('resize', () => {
    width = images[0].clientWidth;
    container.style.transition="none";
    console.log(width);
    container.style.transform = 'translateX(' + (-width * count) + 'px';
})

container.style.transform = 'translateX(' + (-width * count) + 'px';
var tim = setInterval(fwd, 5000);
function fwd() 
{
    if (count >= images.length - 1)
    return;
    container.style.transition = "transform 0.3s ease-in-out";
    count++;
    container.style.transform = 'translateX(' + (-width * count) + 'px';
}
function pre()
{
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


console.log(document.getElementById('cart'));
var send=[];
// var x=[];
// var price=[];
let cart= document.querySelectorAll('div.items');
let price=document.querySelectorAll('p');
for(let i=0;i<cart.length;i++){
    let ch=cart[i].lastElementChild;
    
    ch.addEventListener('click', function() {
        if(ch.lastElementChild.innerHTML==="Add To Cart")
        {
            ch.lastElementChild.innerHTML="Remove From Cart"
            send.push(['<div class="items">'+cart[i].innerHTML+'</div>',cart[i].id,price[i*2].innerHTML.split[]]);
            console.log(send);
        }
        else
        {
            ch.lastElementChild.innerHTML="Add To Cart";
            delete send[i];
            console.log(send);
        }
        localStorage.setItem("favoriteMovie", send);
    })
}
console.log(send);

