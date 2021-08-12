let productImg = document.getElementById('productImg');
let smallImg = document.getElementsByClassName("small-img");

smallImg[0].onclick = function () {
    productImg.src = smallImg[0].src;
}

smallImg[1].onclick = function () {
    productImg.src = smallImg[1].src;
}
// smallImg[2].onclick = function () {
//     productImg.src = smallImg[2].src;
// }

// smallImg[3].onclick = function () {
//     productImg.src = smallImg[3].src;
// }

let table = document.getElementById('table');
let button = document.getElementById('button').addEventListener('click',()=>{
    table.classList.toggle('hidetable');
    let icon = document.getElementsByClassName('button_icon');
    icon.classList.toggle('fas fa-minus');
})





