let navigation = document.getElementById('menu');
navigation.style.width = '0%';
navigation.style.height = document.body.clientHeight + 'px';

let cartmenu = document.getElementById('cartmenu');
cartmenu.style.height = '100%';
cartmenu.style.width = '00%';

var body = document.body,
    html = document.documentElement;

var height = Math.max(body.scrollHeight, body.offsetHeight,
    html.clientHeight, html.scrollHeight, html.offsetHeight);
console.log(height);



document.getElementById('open').addEventListener('click', () => {
    if (navigation.style.width == '0%') {
        navigation.style.width = '100%';
    }
});

document.getElementById('close').addEventListener('click', () => {
    if (navigation.style.width == '100%') {
        navigation.style.width = '0%';
    };
});

navigation.addEventListener('transitionend', () => {
    if (navigation.style.width == '100%') {
        document.getElementById('close').style.display = 'inline-block';
    };
});

navigation.addEventListener('transitionstart', () => {
    if (navigation.style.width == '0%') {
        document.getElementById('close').style.display = 'none';
    };
});

document.getElementById('carticon').addEventListener('click', () => {
    if (cartmenu.style.width == '0%') {
        cartmenu.style.width = '100%';
    };
});

document.getElementById('closecart').addEventListener('click', () => {
    if (cartmenu.style.width == '100%') {
        cartmenu.style.width = '0%';
    };
});

cartmenu.addEventListener('transitionend', () => {
    console.log('here');
    if (cartmenu.style.width == '100%') {
        document.getElementById('closecart').style.display = 'inline-block';
    };
});

cartmenu.addEventListener('transitionstart', () => {
    if (cartmenu.style.width == '0%') {
        document.getElementById('closecart').style.display = 'none';
    };
});