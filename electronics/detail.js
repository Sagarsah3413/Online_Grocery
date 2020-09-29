let tag = document.getElementById('tag');

let current = 1;
let quantity = document.getElementById('slider').children.length;

tag.innerHTML = `${count+1}/${quantity}`;

function fraction() {
    tag.innerHTML = `${count+1}/${quantity}`;
}

let increase = () => {
    if (current)
        current++;
}

let decrease = () => {
    if (current > quantity)
        current--;
}