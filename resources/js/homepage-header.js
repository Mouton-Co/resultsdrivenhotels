// full documentation https://swiperjs.com/get-started

import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

export function homepageHeader() {
    new Swiper("#homepage-header-carousel", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
            clickable: true,
        },
        loop: true,
    });
}

homepageHeader();
