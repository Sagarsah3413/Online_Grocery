let ajax = new XMLHttpRequest();
1
let content = fav;
let web = 'http://onlinebazzar.co/',
    id = [],
    retrive, data, img, identity;
let array = prop;
for (let i = 0; i < array.length; i++) {
    id.push(content[array[i]].productid);
};

ajax.open('POST', 'retrieve.php', true);
ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');



ajax.onreadystatechange = function() {
    if (ajax.readyState === 4) {
        data = document.querySelectorAll('td img');
        if (!ajax.responseText) {
            retrive = [];
        } else {
            retrive = JSON.parse(ajax.responseText);
        }


        for (let i = 0; i < data.length; i++) {
            identity = data[i].parentElement.id;

            if (retrive[identity] !== null) {
                console.log(retrive)
                data[i].src = `${web}productimg/${retrive[identity]}`;
            } else {
                data[i].src = '';
                data[i].style.display = 'none';
            }

        };
    };
};
ajax.send(JSON.stringify(id));


let carticon = document.querySelector('#carticon img');
setTimeout(() => {
    // carticon.src = 'http://localhost/home/images/fruit2.jpg';
}, 2000)