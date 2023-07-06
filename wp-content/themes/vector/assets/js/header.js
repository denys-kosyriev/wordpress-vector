document.addEventListener('DOMContentLoaded', function () {

  // Hide "header top" when scrolling

  const header = document.querySelector('.header');
  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 163) {
      header.classList.add('scroll');
    } else {
      header.classList.remove('scroll');
    }
  })

  // Open and close burger menu

  const burgerBtn = document.getElementsByClassName('burger-btn')[0];
  const burgerMenu = document.getElementsByClassName('burger-menu')[0];

  burgerBtn.addEventListener('click', () => {
    burgerBtn.classList.toggle('active');
    burgerMenu.classList.toggle('open-burger');
  })

});
