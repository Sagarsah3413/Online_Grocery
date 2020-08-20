function verify() {

    var uname = document.getElementById("uname").value.trim();
    var num = document.getElementById('num').value.trim();
    var mail = document.getElementById('mail').value.trim();
    var add = document.getElementById("add").value.trim();

    if (uname === "") {
        document.getElementById('username').innerHTML = "Enter the Name!!!";
        return false;
    }
    
    var phoneno = /^\d{10}$/;
    if(!(num.match(phoneno))){
        document.getElementById('phone').innerHTML = "Enter Mobile Number!!!";
        return false;
    }


    var regx = /^([a-z 0-9\._-]+)@([a-z0-9-]+).([a-z.]{2,8})$/;
    if(!regx.test(mail)&!(mail==="")) {
        document.getElementById("gmail").innerHTML = "Enter Valid ID!!!";
        return false;
    }

    if (add === "") {
        document.getElementById('loc').innerHTML = "Enter the Address!!!";
        return false;
    }

    return true;
}