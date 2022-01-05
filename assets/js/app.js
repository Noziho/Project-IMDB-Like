const swiper = new Swiper('.mainSwiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    autoplay: {
        delay: 5000,
    },
});

const swiper2 = new Swiper(".mySwiper", {
    slidesPerView: 2,
    spaceBetween: 10,
    slidesPerGroup: 2,
    loop: false,
    loopFillGroupWithBlank: true,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

const swiper3 = new Swiper(".mySwiperCategory", {
    slidesPerView: 6,
    spaceBetween: 5,
    slidesPerGroup: 6,
    loop: false,
    loopFillGroupWithBlank: true,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

const swiper4 = new Swiper(".mySwipe3Slide", {
    slidesPerView: 3,
    slidesPerGroup: 3,
    loop: false,
    loopFillGroupWithBlank: true,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
