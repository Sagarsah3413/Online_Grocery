let clips = document.querySelectorAll('#slider img');
let width = document.getElementById('slider').clientWidth;
let frameheight = document.getElementById('slider').clientHeight;
let padding = null;
let ratio = null;
let spread = []


for (let i = 0; i < clips.length; i++) {
    clips[i].style.display = 'inline-block';
    ratio = clips[i].naturalWidth / clips[i].naturalHeight;
    padding = ratio * frameheight;
    if (padding > width)
        padding = width;
    clips[i].style.width = `${padding}px`;
    spread.push(padding);
}

for (let i = 0; i < clips.length; i++) {
    padding = (width - spread[i]) / 2;
    console.log(clips[0].style.width, clips[0].clientWidth)
    clips[i].style.padding = `0px ${padding}px`;
};

// function setimagewidth(i) {
//     padding = (width - spread[i]) / 2;
//     clips[i].style.padding = `0px ${padding}px`;
// }

// window.addEventListener('resize', () => {
//     frameheight = document.getElementById('slider').clientHeight;

//     for (let i = 0; i < clips.length; i++) {
//         ratio = clips[i].naturalWidth / clips[i].naturalHeight;
//         padding = ratio * frameheight;
//         if (padding > width)
//             padding = width;
//         clips[i].style.width = `${padding}px`;
//         spread.push(padding);
//         clips[i].style.padding = `0px`;
//         setimagewidth(i);
//     }
// });