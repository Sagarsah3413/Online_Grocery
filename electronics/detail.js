let tag = document.getElementById('tag');

let current = 1;
let quantity = document.getElementById('slider').children.length;

tag.innerHTML = `${count}/${quantity}`;

function fraction() {
    tag.innerHTML = `${count}/${quantity}`;
}

let increase = () => {
    if (current)
        current++;
}

let decrease = () => {
    if (current > quantity)
        current--;
}