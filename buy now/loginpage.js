var initial = null;


function change(valu) {
    if (initial) {
        document.getElementById(initial).style.backgroundColor = "rgb(196, 211, 212)"
    }
    document.getElementById(valu).style.backgroundColor = "rgb(146,250,240)";
    initial = valu;
}


function choose(the) {
    var target = document.getElementById(the);
    change(the);
    dislighting(the);
}

function dislighting(the) {
    var shadow = document.getElementById(the);
    if (shadow.parentElement.lastElementChild.innerHTML !== "") {
        shadow.parentElement.lastElementChild.innerHTML = "";
    }
}