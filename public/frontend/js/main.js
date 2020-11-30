setInterval(myTimer, 1000);
function myTimer(){
    const loader = document.querySelector('.preloader');
    loader.classList.add('hidden')
}
//Preloader
window.addEventListener('load', function(){
    const loader = document.querySelector('.preloader');
    loader.classList.add('hidden')
})

// js for menu scroll
window.addEventListener('scroll', function(){
    let navbar = document.getElementById("navbar2");
    let formSearch = document.querySelector('#header > form')
    navbar.classList.toggle("scrolled", window.scrollY >0)
    formSearch.classList.toggle("scrolledDown", window.scrollY >0)
})
window.addEventListener('scroll', function(){
    let navbar = document.getElementById("navbar1");
    navbar.classList.toggle("scrolled2", window.scrollY >0)
})

//counter js
jQuery(document).ready(function($) {
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
});

//initializing wow js
new WOW().init();