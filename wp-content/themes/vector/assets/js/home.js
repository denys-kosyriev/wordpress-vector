document.addEventListener('DOMContentLoaded', function () {

  // Slider section 'banners'
  new Swiper(".swiper-banners", {
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    speed: 800,
    autoplayDelay: 3000,
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  })

  // Slider section 'payment'

  new Swiper(".swiper-payment", {
    slidesPerView: 1,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })

})
