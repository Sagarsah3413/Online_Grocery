let navigation = document.getElementById('menu');
navigation.style.width = '0%';
navigation.style.height = '100vh';

let cartmenu = document.getElementById('cartmenu');
cartmenu.style.height = '100vh';
cartmenu.style.width = '00%';

window.addEventListener('resize', () => {
    console.log(document.documentElement.clientHeight);
    navigation.style.transition = 'none';
    cartmenu.style.transition = 'none';
    navigation.style.height = '100vh';
    cartmenu.style.height = '100vh';
});



document.getElementById('open').addEventListener('click', () => {
    if (navigation.style.width == '0%') {
        navigation.style.transition = '0.7s ease-in-out all';
        navigation.style.width = '100%';
    }
});

document.getElementById('close').addEventListener('click', () => {
    if (navigation.style.width == '100%') {
        navigation.style.transition = '0.7s ease-in-out all';

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
        cartmenu.style.transition = '0.7s ease-in-out all';

        cartmenu.style.width = '100%';
    };
});

document.getElementById('closecart').addEventListener('click', () => {
    if (cartmenu.style.width == '100%') {
        cartmenu.style.transition = '0.7s ease-in-out all';

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