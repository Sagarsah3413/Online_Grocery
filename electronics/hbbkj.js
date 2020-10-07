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

var xDown = null;
var yDown = null;

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

    var xUp = evt.touches[0].clientX;
    var yUp = evt.touches[0].clientY;

    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;

    if (Math.abs(xDiff) > Math.abs(yDiff)) { /*most significant*/
        if (xDiff > 7) {
           fwd();
            /* left swipe */
        } 
        if (xDiff <-7){
            pre();
            /* right swipe */
        }
    }
    //  else {
    //     if (yDiff > 0) {
    //         /* up swipe */
    //     } else {
    //         /* down swipe */
    //     }
    // }
    /* reset values */
    xDown = null;
    yDown = null;
};