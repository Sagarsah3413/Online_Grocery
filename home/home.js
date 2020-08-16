console.log(document.getElementById('cart'));
var send="";
let cart= document.querySelectorAll('div#items');
for(let i=0;i<cart.length;i++){
    let ch=cart[i].lastElementChild;
    
    ch.addEventListener('click', ()=>{
        // document.getElementById('crt');
        // .appendChild(cart);
        console.log(cart[i]);
        console.log(ch);
        send+='<div id="items">'+cart[i]+'</div>';
        console.log(send);
        localStorage.setItem("favoriteMovie", send);
    })
}
console.log(send);