var send="";
var sen="";
let cart= document.querySelectorAll('div#items');
for(let i=0;i<cart.length;i++){
    let ch=cart[i].lastElementChild;
    
    ch.addEventListener('click', ()=>{
        if(ch.lastElementChild.innerHTML="Add To Cart")
        {
            send+='<div id="items">'+cart[i].innerHTML+'</div>';
           ch.lastElementChild.innerHTML="Remove From Cart"
        }
        if(ch.lastElementChild.innerHTML="Remove From Cart")
        {
            sen+='<div id="items">'+cart[i].innerHTML+'</div>';
            ch.lastElementChild.innerHTML="Add to Cart"
        }
    })
}
localStorage.setItem("sendd", send);
localStorage.setItem("senn", sen);