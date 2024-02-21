const swiperSertification = new Swiper(".certifications__slider", {
  slidesPerView: 1,
  watchOverflow: true,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  spaceBetween: 20,
  autoHeight: true,
  breakpoints: {
    615: {
      loop: false,
    },
    1200: {
      slidesPerView: 2,
      spaceBetween: 30,
      loop: false,
    },
  },
});

const swiper = new Swiper(".feetback__slider", {
  slidesPerView: 1,
  watchOverflow: true,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  spaceBetween: 20,
  autoHeight: true,
});
