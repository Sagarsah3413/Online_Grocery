// var fav = sessionStorage.getItem('fav').split(',');


// for (let i = 0; i < fav.length; i++)
// document.querySelector('div.grid').innerHTML += fav[i];
// let img = document.querySelectorAll('img');


sessionStorage.setItem('index', 'value');
sessionStorage.setItem('index1', 'value1');

for (let i = 0; i < sessionStorage.length; i++) {
    console.log(sessionStorage.getItem(sessionStorage.key(i)));

}

// for (let i = 0; i < img.length; i++) {
//     // let str = img[i].src.split('/');
//     // str.splice(4, 0, "../home");
//     // img[i].src = str.join('/');
// }
console.log(sessionStorage.key);

let xhr = new XMLHttpRequest();

window.addEventListener('load', () => {
    xhr.open('GET', 'retrieve.php', true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {

        };
    };

});