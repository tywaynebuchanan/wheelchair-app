let productImg = document.getElementById('productImg');
let smallimg = document.getElementsByClassName('small-img');

smallimg[0].onclick = function () {
    productImg.src = smallimg[0].src;
}

smallimg[1].onclick = function () {
    productImg.src = smallimg[1].src;
}
smallimg[2].onclick = function () {
    productImg.src = smallimg[2].src;
}

smallimg[3].onclick = function () {
    productImg.src = smallimg[3].src;
}

let table = document.getElementById('table');
let button = document.getElementById('button').addEventListener('click',()=>{
    table.classList.toggle('hidetable');
    let icon = document.getElementsByClassName('button_icon');
    icon.classList.toggle('fas fa-minus');
})


