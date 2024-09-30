const closeBtn = document.getElementById('close');
const messageTop = document.getElementById('top-logo-reserved');
closeBtn.addEventListener('click',(e)=>{
    const messageStorage = sessionStorage.setItem('close_status','closed');
    if(sessionStorage.getItem('close_status')==="closed"){
    messageTop.style.display = "none";
    }
    else{
    messageTop.style.display = "block";
    messageStorage = sessionStorage.removeItem('close_status','closed');
    }
})

const menu_bar_icon = document.getElementById('menu_bar_icon')
const left_side_menu = document.getElementById('menu_left_side');
menu_bar_icon.addEventListener("click",(e)=>{
    left_side_menu.style.left = "0";
    left_side_menu.style.transition = "all .4s ease-in-out";
});
left_side_menu.firstElementChild.addEventListener('click',(e)=>{
    left_side_menu.style.left = "-40rem";
    left_side_menu.style.transition = "all .4s linear";
})

console.log();
