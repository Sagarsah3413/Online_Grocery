sessionStorage.setItem('index', 'value');
sessionStorage.setItem('index1', 'value1');

for (let i = 0; i < sessionStorage.length; i++) {
    // console.log(sessionStorage.getItem(sessionStorage.key(i)));
}
let content = JSON.parse(sessionStorage.getItem('fav'));
let array = Object.getOwnPropertyNames(content);
for (let i = 0; i < array.length; i++) {
    console.log(content[array[i]]);

};


let plus = document.querySelectorAll('.plus');
let minus = document.querySelectorAll('.minus');
let input;

for (let i = 0; i < plus.length; i++) {

    plus[i].addEventListener('click', () => {
        input = plus[i].parentElement.children[1];
        input.value++;
    });

    minus[i].addEventListener('click', () => {
        input = plus[i].parentElement.children[1];
        if (input.value > 0)
            input.value--;
    });
};

let xhr = new XMLHttpRequest();

window.addEventListener('load', () => {
    xhr.open('GET', 'retrieve.php', true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {

        };
    };

});