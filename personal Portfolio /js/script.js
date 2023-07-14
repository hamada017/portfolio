/*========== menu icon navbar ==========*/
let menuIcon = document.querySelector('#menu-icon');
 let navbar = document.querySelector('.navbar');


/*========== scroll sections active link ==========*/
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');



    /*========== sticky navbar ==========*/
    window.onscroll = () =>{
let header = document.querySelector('.header');

header.classList.toggle('sticky', window.scrollY > 100);
    };

    /*========== remove menu icon navbar when click navbar link (scroll) ==========*/




/*========== swiper ==========*/

// var swiper = new Swiper(".mySwiper", {
//     slidesPerView: 1,
//     spaceBetween: 30,
//     loop: true,
//     pagination:{
//         el: ".swiper-pagination",
//         clickable: true,
//     },
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
// });

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 50,
    loop: true,
    grapCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


/*========== dark light mode ==========*/


/*========== scroll reveal ==========*/