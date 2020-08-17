var favoritemovie = localStorage.getItem('favoriteMovie');
console.log(favoritemovie);
document.getElementById('grid').innerHTML=favoritemovie;
let img=document.querySelectorAll('img');
for(let i=0;i<img.length;i++)
{    
    let str=img[i].src.split('/');
    str.splice(4,0,"../home")
    img[i].src=str.join('/');
}