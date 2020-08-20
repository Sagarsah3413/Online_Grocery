let ca = document.querySelector('#cartmenu section div.extr');

var fav, prop;
document.getElementById('carticon').addEventListener('click', () => {
    fav = JSON.parse(sessionStorage.getItem('fav'));
    ca.innerHTML = "";

    prop = Object.getOwnPropertyNames(fav);

    for (let i = 0; i < prop.length; i++) {
        var str = document.createElement('div');
        str.innerHTML = "<h2>" + fav[prop[i]].name + "</h2><h4>" + fav[prop[i]].quantity + " &#10006; <span class='price'>Rs." + fav[prop[i]].rate +
            "</span> = <span class='price total'>Rs." + fav[prop[i]].quantity * fav[prop[i]].rate + "</span></h4>";
        ca.append(str);
    }
});