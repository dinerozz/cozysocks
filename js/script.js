const menu = document.querySelector(".header-icon");
const ul = document.querySelector(".header-ul");
const span1 = document.querySelector(".line-1");
const span2 = document.querySelector(".line-2");
const span3 = document.querySelector(".line-3");

menu.addEventListener('click',()=>{
    ul.classList.toggle('active');
    span1.classList.toggle('span1-style');
    span2.classList.toggle('span2-style');
    span3.classList.toggle('span3-style');
})