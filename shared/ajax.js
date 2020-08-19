let xml = new XMLHttpRequest();

console.log('here');

let view = document.getElementsByClassName('quantity');

// console.log(view[0].classList);

view[0].addEventListener('ValueChange', () => {});

let observer = new MutationObserver((mutationlist) => {
    console.log('here');
    console.log(mutationlist);
});

observer.observe(view[0], {
    characterDataOldValue: true,
    childList: true,
});