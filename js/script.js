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

const animItems = document.querySelectorAll('._anim-items');
if(animItems.length>0){
    window.addEventListener('scroll', animOnScroll);
    function animOnScroll(params){
        for(let index=0; index < animItems.length; index++){
            const animItem = animItems[index];
            const animItemHeight = animItem.offsetHeight;
            const animItemOffset = offset(animItem).top;
            const animStart = 4;

            let animItemPoint = window.innerHeight - animItemHeight / animStart;

            if(animItemHeight > window.innerHeight){
                animItemPoint = window.innerHeight - window.innerHeight / animStart;
            }

            if((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)){
                animItem.classList.add('_active');
            }
            else{
                animItem.classList.remove('_active');
            }
        }
    }
    function offset(el){
        const rect = el.getBoundingClientRect(),
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return {
            top: rect.top + scrollTop, left: rect.left + scrollLeft
        }
    }
    animOnScroll();
}






$(document).ready(function(){
    $('.slider').slick({
        arrows: true,
        dots: false,
        adaptiveHeight: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        speed: 1000,
        easing: 'linear',
        infinite: true,
        // initialSlide: 3,
        autoplay: true,
        autoplaySpeed: 1500,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: true,
        // draggable: false,
        // swipe: false,
        // touchThreshold: 10,
        // touchMove: false,
        waitForAnimate: true,
        centerMode: true,
        // variableWidth: true,
        // rows: 2,
        // slidesPerRow: 2,
        // vertical: true,
        // fade: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ],
        // mobileFirst: false,

    });  
});