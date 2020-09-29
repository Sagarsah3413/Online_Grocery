let tag = document.getElementById('tag');

let current = 1;
let num = document.getElementById('slider').children.length;

tag.innerHTML = `${count+1}/${num}`;

function fraction() {
    tag.innerHTML = `${count+1}/${num}`;
}

let increase = () => {
    if (current)
        current++;
}

let decrease = () => {
    if (current > num)
        current--;
}