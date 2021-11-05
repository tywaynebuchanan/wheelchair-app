let productImg = document.getElementById('productImg');
let smallimg = document.getElementsByClassName('small-img');

let images = [smallimg[1],smallimg[2],smallimg[3],smallimg[4]];
let i = 0;
 let nextbtn = document.getElementById("next").addEventListener('click',()=>{
   if(i >= images.length - 1) i = -1;
     i++;
    productImg.src = smallimg[i].src;
 })

 let prevbtn = document.getElementById("prev").addEventListener('click',()=>{
  if(i <= 0) i = images.length;
  i--;
  productImg.src = smallimg[i].src;
})

let table = document.getElementById('table');
let button = document.getElementById('button').addEventListener('click',()=>{
    table.classList.toggle('hidetable');
    let icon = document.getElementsByClassName('button_icon');
    icon.classList.toggle('fas fa-minus');
})

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


