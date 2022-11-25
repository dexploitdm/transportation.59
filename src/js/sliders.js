// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';
$(document).ready(function() {
    const swiper = new Swiper(".mySwiper", {
        autoHeight: true,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

});

// autoplay: {
//     delay: 2500,
//         disableOnInteraction: false,
// },