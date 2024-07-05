// full documentation https://swiperjs.com/get-started

import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

export function homepageHeader() {
    let settings = null;
    
    if (rotation == undefined || rotation == '0') {
        settings = {
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
        };
    } else {
        settings = {
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
            autoplay: {
                delay: rotation,
                disableOnInteraction: false,
            },
        };
    }

    new Swiper("#homepage-header-carousel", settings);
}

homepageHeader();
