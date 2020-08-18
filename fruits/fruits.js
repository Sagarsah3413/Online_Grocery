//quantity addition
function arrayRemove(arr, value) {
    return arr.filter(
        function(ele) {
            return ele[1] != value;
        }
    );
}

var send=[];
let cart= document.querySelectorAll('div.items');
let price=document.querySelectorAll('p');
for(let i=0;i<cart.length;i++){
    let ch=cart[i].lastElementChild.lastElementChild.lastElementChild;
    ch.addEventListener('click', function() {
        if(ch.innerText==="Add To Cart")
        {
            ch.innerText="Remove From Cart"
            send.push(['<div class="items">'+cart[i].innerHTML+'</div>',cart[i].lastElementChild.id,price[i*2].innerText,]);
        }
        else
        {
            ch.innerText="Add To Cart";
            sen=arrayRemove(send,cart[i].lastElementChild.id);
            send=sen;
        }
        localStorage.setItem("favoriteMovie", send);
    })
}
//quantity addition

let buy = document.querySelectorAll("div.grid div.items div.cart article");
let plus, minus, quantity;
let xml = new XMLHttpRequest();
for (let i = 0; i < buy.length; i++) {
    plus = buy[i].lastElementChild;
    minus = buy[i].firstElementChild;
    // console.log(plus, minus);

    plus.addEventListener('click', () => {
        quantity = buy[i].children[1];
        quantity.innerHTML++;
    });

    minus.addEventListener('click', () => {
        quantity = buy[i].children[1];
        if (quantity.innerHTML > 0) {
            quantity.innerHTML--;
        }
    });
}