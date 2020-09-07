let use = document.getElementById('use');
let message = document.getElementById('message');

let locator;
let crds = null;

function getcoords(pos) {
    crds = pos.coords;
    console.log(crds.latitude, crds.longitude);
    message.innerHTML = 'Your order will be delivered to your CURRENT LOCATION after completing order.';
    message.style.color = '#f50000';
    message.style.fontWeight = '600';
};

function error() {
    message.innerHTML = '';
    console.log('error');
    return;
}

use.addEventListener('click', () => {
    if (!navigator.geolocation) {
        alert('enable gps first');
        return;
    }
    locator = navigator.geolocation.getCurrentPosition(getcoords, error);

});