const close = document.getElementById('closebtn');
const menu = document.getElementById('drop_menu');
const menudown = document.getElementById('menudown');

menu.addEventListener('click',()=>{
    menu.classList.toggle('fa-chevron-circle-up');
    menudown.classList.toggle('show');
}
);