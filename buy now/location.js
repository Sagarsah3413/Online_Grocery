let locator = navigator.geolocation.getCurrentPosition(getcoords);
let crds;

function getcoords(pos) {
    crds = pos.coords;
    console.log(crds.latitude, crds.longitude);
}


setTimeout(() => { console.log(crds.latitude, crds.longitude); }, 1000);