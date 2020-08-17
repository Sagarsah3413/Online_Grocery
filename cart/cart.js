// var send = localStorage.getItem('sendd');
// console.log(send);
// document.getElementById('grid').innerHTML=send;
// let img=document.querySelectorAll('img');
// for(let i=0;i<img.length;i++)
// {    
//     let str=img[i].src.split('/');
//     str.splice(4,0,"../home")
//     img[i].src=str.join('/');
// }
var favoritemovie = localStorage.getItem('favoriteMovie').split(',');
console.log(favoritemovie);
for(let i=0;i<favoritemovie.length;i++)
document.querySelector('div.grid').innerHTML+=favoritemovie[i];
let img=document.querySelectorAll('img');
for(let i=0;i<img.length;i++)
{    
    let str=img[i].src.split('/');
    str.splice(4,0,"../home")
    img[i].src=str.join('/');
}