let xhr = new XMLHttpRequest();
1
let content = fav;
let web = 'http://localhost/',
    id = [],
    json, data, img, identity;
let array = prop;
console.log(array);
for (let i = 0; i < array.length; i++) {
    id.push(content[array[i]].productid);
};

xhr.open('POST', 'retrieve.php', true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');



xhr.onreadystatechange = function() {
    if (xhr.readyState === 4) {
        data = document.querySelectorAll('td img');
        if (!xhr.responseText) {
            json = [];
        } else {
            json = JSON.parse(xhr.responseText);
        }


        for (let i = 0; i < data.length; i++) {
            identity = data[i].parentElement.id;

            if (json[identity] !== null) {
                // if (json[identity] === null)

                data[i].src = `${web}productimg/${json[identity]}`;
            } else {
                console.log('src val', json[identity]);
                data[i].src = '';
                console.log(data[i]);
                data[i].style.display = 'none';
            }

        };
    };
};
xhr.send(JSON.stringify(id));


let carticon = document.querySelector('#carticon img');
setTimeout(() => {
    console.log(carticon.src);
    // carticon.src = 'http://localhost/home/images/fruit2.jpg';
}, 2000)