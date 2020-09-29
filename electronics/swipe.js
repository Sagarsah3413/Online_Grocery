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
})
container.style.height = height + 'px';
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
var chx,chy;
function getTouches(evt) {
    return evt.touches || // browser API
        evt.originalEvent.touches; // jQuery
}

function handleTouchStart(evt) {
    var firstTouch = getTouches(evt)[0];
    xDown = firstTouch.clientX;
    yDown = firstTouch.clientY;
}

function handleTouchMove(evt) {
    if (!xDown || !yDown) {
        return;
    }
    // console.log(xDown);
    // console.log(yDown);
    var xUp,yUp,xDiff,yDiff;
    for(let i=0;i<evt.touches.length;i++)
    {
    xUp = evt.touches[i].clientX;
    yUp = evt.touches[i].clientY;
    // console.log(xUp);
    // console.log(width);
    width = images[0].clientWidth;
    xDiff = xDown - xUp;
    if(xDiff>width)
    chx=-width;
    else if(xDiff<-width)
    chx=-width;
    else 
    chx=xDiff;
    yDiff = yDown - yUp;
    chy=yDiff;
    console.log(xDiff);
    console.log(chx);
    console.log(count);
    container.style.transform = 'translateX(' + (width*count+chx) + 'px';
    // xDown = null;
    // yDown = null;
}

// xDown = null;
// yDown = null;
};
function change(evt){
    if (!xDown || !yDown) {
        return;
    }
    if (Math.abs(chx) > Math.abs(chy)) { /*most significant*/
        console.log('vjagcu');
        if (chx > 0) fwd();
        else pre();
    }
    xDown=null;
    yDown=null;
}