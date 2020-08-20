// // let xml = new XMLHttpRequest();

// console.log('here');

// let view = document.getElementsByClassName('quantity');

// // console.log(view[0].classList);

// view[0].addEventListener('', () => {});
// console.log(view[0]);


// let observer = new MutationObserver(() => {

//     console.log('thhere');
//     // console.log(mutationlist);

//     time = performance.now();
//     console.log('ajax', time);
// });

// observer.observe(view[0], {
//     characterDataOldValue: true,
//     childList: true,
//     attributes: true,
//     characterData: true,
//     // subtree: true,
// });

// // observer.disconnect();



// let xhr = new XMLHttpRequest();
// console.log(fav);


// console.log(sessionStorage.key);

let xhr = new XMLHttpRequest();

// window.addEventListener('load', () => {
//     xhr.open('GET', 'retrieve.php', true);

//     xhr.onreadystatechange = function() {
//         if (xhr.readyState === 4) {

//         };
//     };
// });

let content = JSON.parse(sessionStorage.getItem('fav'));
let web = 'http://localhost/',
    id = [],
    json;
let array = Object.getOwnPropertyNames(content);
for (let i = 0; i < array.length; i++) {
    id.push(content[array[i]].productid);
};
console.log(id);

xhr.open('POST', 'retrieve.php', true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

xhr.onreadystatechange = function() {
    if (xhr.readyState === 4) {
        json = JSON.parse(xhr.responseText);

    };
};
// console.log();
xhr.send(JSON.stringify(id));


let carticon = document.querySelector('#carticon img');
setTimeout(() => {
    console.log(carticon.src);
    // carticon.src = 'http://localhost/home/images/fruit2.jpg';
}, 2000)