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
    use.style.backgroundColor = '#15F224';
    use.style.color = '#142B2B';
    use.style.border = '1px solid black';
    use.innerHTML = 'Location Found';
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