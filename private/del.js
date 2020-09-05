let form = document.getElementById('formm');
let orderlist = document.createElement('input');
let packlist = document.createElement('input');
let deliverlist = document.createElement('input');

orderlist.setAttribute('name', 'orderid');
packlist.setAttribute('name', 'pack');
deliverlist.setAttribute('name', 'deliver');

orderlist.setAttribute('value', '');
packlist.setAttribute('value', '');
deliverlist.setAttribute('value', '');

let arr=document.querySelectorAll('input.del');
let pack = [],orderid=[],
    deliver = [];

for(let i=0;i<arr.length;i++)
{
    arr[i].addEventListener('click', function(){
        if(arr[i].parentElement.parentElement.children[1].firstElementChild.checked==false){
            arr[i].checked=false;
        }
    });
    arr[i].parentElement.parentElement.children[1].firstElementChild.addEventListener('click', function(){
        if(arr[i].parentElement.parentElement.children[1].firstElementChild.checked==false){
            arr[i].checked=false;
        }
    });
}
form.addEventListener('submit',function(){
    for (let i = 0; i < arr.length; i++) {
        orderid.push(arr[i].parentElement.parentElement.firstElementChild.id);
        deliver.push(Number(arr[i].checked));
        pack.push(Number(arr[i].parentElement.parentElement.children[1].firstElementChild.checked));
    }

    orderid = orderid.join(',');
    pack = pack.join(',');

    orderlist.value = orderid;
    packlist.value = pack;
    deliverlist.value = deliver;
    // coordinateinput.value = `Latitude:${crds.latitude} Longitude:${crds.longitude} [${crds.latitude} ${crds.longitude}]`;
    packlist.style.display = 'none';
    orderlist.style.display = 'none';
    deliverlist.style.display = 'none';

    form.appendChild(orderlist);
    form.appendChild(packlist);
    form.appendChild(deliverlist);
});