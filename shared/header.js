let navigation = document.getElementById('menu'); //here
let sidemenu = document.querySelector('#menu section');
let navigationstyle = navigation.style;

let search = document.querySelector('div#search input'),
    suggestion, json, getter, initsearch = document.getElementById('initsearch');
let xhr = new XMLHttpRequest();


navigationstyle.width = '0%';
navigationstyle.height = '100vh';


let cartmenu = document.getElementById('cartmenu'); //here
let cartcontent = document.querySelector('#cartmenu section');
let cartmenustyle = cartmenu.style;

cartmenustyle.height = '100vh';
cartmenustyle.width = '0%';


window.addEventListener('resize', () => {
    navigationstyle.transition = 'none';
    cartmenustyle.transition = 'none';
    navigationstyle.height = '100vh';
    cartmenustyle.height = '100vh';
});

suggestion = search.parentElement.lastElementChild;
search.value = '';
initsearch.href = `../search/search.php?value=${encodeURI(search.value.trim())}`;

initsearch.addEventListener('click', (e) => {

    if (search.value.trim() === "") {
        e.preventDefault();
        return false;
    }
    initsearch.href = `../search/search.php?value=${encodeURI(search.value.trim())}`;
});

window.addEventListener('load', () => {
    // document.getElementById('index').innerHTML = 
    console.log(sessionStorage.getItem('fav'));
});

search.addEventListener('input', () => {

    if (search.value.trim().length >= 3)
        suggestion.style.display = 'block';
    else {
        suggestion.style.display = 'none';
        return;
    }

    xhr.open('GET', `../shared/autosuggest.php?value=${search.value.trim()}`, true);

    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            json = JSON.parse(xhr.responseText);

            for (let i = 0; i < 4; i++) {
                getter = suggestion.children[i].firstElementChild;
                if (json[i] == undefined) {
                    getter.parentElement.style.display = 'none';
                } else {
                    getter.innerHTML = json[i];
                    getter.parentElement.style.display = 'block';

                }
                getter.href = `../search/search.php?value=${encodeURI(json[i])}`;
            }

        };
    };
    xhr.send();

});
document.getElementById("form").addEventListener("submit",function(){
    console.log("budb");
    if (search.value.trim() === "") {
        e.preventDefault();
        return false;
    }
    document.getElementById("form").action= `../search/search.php?value=${encodeURI(search.value.trim())}`;
});


let dropdown = document.getElementsByClassName('dropdown');
let unorder, liheight;
for (let i = 0; i < dropdown.length; i++) {
    dropdown[i].parentElement.lastElementChild.style.height = '0px';

    dropdown[i].addEventListener('click', () => {
        unorder = dropdown[i].parentElement.lastElementChild;
        liheight = unorder.children.length * unorder.firstElementChild.clientHeight;
        if (unorder.style.height === '0px') {
            unorder.style.height = `${liheight}px`;
        } else {
            unorder.style.height = '0px';
        }
    });
}


document.getElementById('open').addEventListener('click', () => {
    if (navigationstyle.width == '0%') {
        navigationstyle.transition = '0.5s ease-in-out all';
        navigationstyle.width = '100%';
    };

});

function sidemenuclose() {
    if (navigationstyle.width == '100%') {
        navigationstyle.transition = '0.5s ease-in-out all';

        navigationstyle.width = '0%';
    };
}

document.getElementById('close').addEventListener('click', () => {
    sidemenuclose();
});

navigation.addEventListener('click', (event) => {
    if (navigation === event.target) {
        sidemenuclose();
    }
})

navigation.addEventListener('transitionend', () => {
    if (navigationstyle.width == '100%') {
        document.getElementById('close').style.display = 'inline-block';
    };
});

navigation.addEventListener('transitionstart', () => {
    if (navigationstyle.width == '0%') {
        document.getElementById('close').style.display = 'none';
    };
});



document.getElementById('carticon').addEventListener('click', () => {
    if (cartmenustyle.width == '0%') {
        cartmenustyle.transition = '0.5s ease-in-out all';

        cartmenustyle.width = '100%';
    };
});

function cartclose() {
    if (cartmenustyle.width == '100%') {
        cartmenustyle.transition = '0.5s ease-in-out all';
        cartmenustyle.width = '0%';
    };
}

document.getElementById('closecart').addEventListener('click', () => {
    cartclose();
});

cartmenu.addEventListener('click', (event) => {
    if (cartmenu === event.target) {
        cartclose();
    }
})

cartmenu.addEventListener('transitionend', () => {
    if (cartmenustyle.width == '100%') {
        document.getElementById('closecart').style.display = 'inline-block';
    };
});

cartmenu.addEventListener('transitionstart', () => {
    if (cartmenustyle.width == '0%') {
        document.getElementById('closecart').style.display = 'none';
    };
});



//display activate
navigation.style.display = 'block';
cartmenu.style.display = 'block';