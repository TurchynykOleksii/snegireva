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
