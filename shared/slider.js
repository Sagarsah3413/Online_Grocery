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
var tim = setInterval(fwd, 3000);

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
    tim = setInterval(fwd, 3000);
    fwd();
});
prev.addEventListener('click', () => {
    clearInterval(tim);
    tim = setInterval(pre, 3000);
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