let form = document.getElementById('formm');
let productlist = document.createElement('input');
let quantitylist = document.createElement('input');
let coordinateinput = document.createElement('input');

productlist.setAttribute('name', 'product');
quantitylist.setAttribute('name', 'quantity');
coordinateinput.setAttribute('name', 'location');

productlist.setAttribute('value', '');
quantitylist.setAttribute('value', '');
coordinateinput.setAttribute('value', '');
coordinateinput.setAttribute('type', 'text');

let fav = new Object;
let index = [];
if (sessionStorage.getItem('fav') != null) {
    fav = JSON.parse(sessionStorage.getItem('fav'));
    index = Object.getOwnPropertyNames(fav);
}
let quantityinput = [],
    productinput = [];


function verify() {

    var uname = document.getElementById("uname").value.trim();
    var num = document.getElementById('num').value.trim();
    var mail = document.getElementById('mail').value.trim();
    var add = document.getElementById("add").value.trim();

    if (uname === "") {
        document.getElementById('username').innerHTML = "Enter the Name!!!";
        return false;
    }

    var phoneno = /^\d{10}$/;
    // var phoneno=/^\+?([0-9]{3})?[-. ]?([0-9]{10})$/;
    if (!(num.match(phoneno))) {
        document.getElementById('phone').innerHTML = "Enter Mobile Number!!!";
        return false;
    }


    var regx = /^([a-z 0-9\._-]+)@([a-z0-9-]+).([a-z.]{2,8})$/;
    if (!regx.test(mail) & !(mail === "")) {
        document.getElementById("gmail").innerHTML = "Enter Valid ID!!!";
        return false;
    }

    if (add === "") {
        document.getElementById('loc').innerHTML = "Enter the Address!!!";
        return false;
    }
    let sum = 0;
    for (let i = 0; i < index.length; i++) {
        sum += fav[index[i]].quantity * fav[index[i]].rate;
    }
    if (sum < 1) {
        document.getElementById('less').innerHTML = "Select atleast 1 product!!!";
        return false;
    }


    for (let i = 0; i < index.length; i++) {
        productinput.push(fav[index[i]].productid);
        quantityinput.push(fav[index[i]].quantity);
    }

    quantityinput = quantityinput.join(',');
    productinput = productinput.join(',');

    quantitylist.value = quantityinput;
    productlist.value = productinput;

    if (crds) {
        coordinateinput.value = `Latitude:${crds.latitude} Longitude:${crds.longitude} [${crds.latitude} ${crds.longitude}]`;
    }
    quantitylist.style.display = 'none';
    productlist.style.display = 'none';
    coordinateinput.style.display = 'none';

    form.appendChild(productlist);
    form.appendChild(quantitylist);
    form.appendChild(coordinateinput);

    sessionStorage.clear();
    return true;
}