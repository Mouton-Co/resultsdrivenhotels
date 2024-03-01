// full documentation https://swiperjs.com/get-started

import Swiper from "swiper/bundle";
import "swiper/css/bundle";

export function cardsCarousel() {
    new Swiper("#related-posts-carousel", {
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
            clickable: true,
        },
        loop: true,
        slidesPerView: 1,
        spaceBetween: 60,
        breakpoints: {
            620: {
                slidesPerView: 2,
            },
            960: {
                slidesPerView: 3,
            },
        },
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
    });
}

cardsCarousel();
