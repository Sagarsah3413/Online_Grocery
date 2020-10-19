//variable list
let container = document.querySelector('#slider');
let images = document.querySelectorAll('#slider img');
let prev = document.getElementById('prev');
let next = document.getElementById('next');
let count = 0;
let width = images[0].clientWidth;
let height = images[0].clientHeight;
//vaiablelist end

//slider setting
window.addEventListener('resize', () => {
    width = images[0].clientWidth;
    container.style.transition = "none";
    container.style.transform = 'translateX(' + (-width * count) + 'px';
    if(screen.width<1095)
    container.style.height =container.parentElement.style.height= (screen.width)*.95/1.9 + 'px';
    if(screen.width>730)
    container.parentElement.style.height= container.style.height = (screen.width)*.7/1.9 + 'px';
    });
container.style.height = height + 'px';
if(screen.width<1095)
    container.style.height = (screen.width)*.95/1.9 + 'px';
container.style.transform = 'translateX(' + (-width * count) + 'px';

function fwd() {
    if (count >= images.length - 1)
        return;
    container.style.transition = "transform 0.3s ease-in-out";
    count++;
    container.style.transform = 'translateX(' + (-width * count) + 'px';
    fraction();
}

function pre() {
    if (count <= 0)
        return;
    container.style.transition = "transform 0.3s ease-in-out";
    count--;
    container.style.transform = 'translateX(' + (-width * count) + 'px';
    fraction();
}
next.addEventListener('click', () => {
    fwd();
});
prev.addEventListener('click', () => {
    pre();
});

container.addEventListener('touchstart', handleTouchStart, false);
container.addEventListener('touchmove', handleTouchMove, false);
container.addEventListener('touchend', change, false);

var xDown = null;
var yDown = null;
var chx, chy;

function getTouches(evt) {
    return evt.touches || // browser API
        evt.originalEvent.touches; // jQuery
}

function handleTouchStart(evt) {
    const firstTouch = getTouches(evt)[0];
    xDown = firstTouch.clientX;
    yDown = firstTouch.clientY;
}

function handleTouchMove(evt) {
    if (!xDown || !yDown) {
        return;
    }
    var xUp, yUp, xDiff, yDiff;
    xUp = evt.touches[0].clientX;
    yUp = evt.touches[0].clientY;
    width = images[0].clientWidth;
    xDiff = xDown - xUp;
    if (xDiff > width || xDiff < -width)
        chx = width;
    else
        chx = xDiff;
    yDiff = yDown - yUp;
    chy = yDiff;
    // if (Math.abs(chx) > Math.abs(chy))
    // container.style.transform = 'translateX(' + (-width*(count)-chx) + 'px';

}

function change(evt) {
    if (!xDown || !yDown) {
        return;
    }
    if (Math.abs(chx) > Math.abs(chy)) {
        if (chx > 0) fwd();
        else pre();
    }
    xDown = null;
    yDown = null;
}