var fav = sessionStorage.getItem('fav').split(',');


for (let i = 0; i < fav.length; i++)
// document.querySelector('div.grid').innerHTML += fav[i];
    let img = document.querySelectorAll('img');


for (let i = 0; i < img.length; i++) {
    // let str = img[i].src.split('/');
    // str.splice(4, 0, "../home");
    // img[i].src = str.join('/');
}
sessionStorage.setItem("fav", fav);

let xhr = new XMLHttpRequest();

window.addEventListener('load', () => {
    xhr.open('GET', 'retrieve.php', true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {

        };
    };

});