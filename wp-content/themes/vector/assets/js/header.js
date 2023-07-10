document.addEventListener('DOMContentLoaded', function () {

  // Hide "header top" when scrolling

  const header = document.querySelector('.header');
  const headerMain = header.getElementsByClassName('main')[0];
  let lastScrollPosition = window.pageYOffset;

  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 90) {
      header.classList.add('scroll');
    } else if (window.pageYOffset <= 90) {
      header.classList.remove('scroll');
      headerMain.classList.remove('open');
    }

    // Show and hide header if scroll raises or lowers

    const currentScrollPosition = window.pageYOffset;

    if (lastScrollPosition > window.pageYOffset && window.pageYOffset > 90) {
      headerMain.classList.add('open');
    } else if (lastScrollPosition < window.pageYOffset) {
      headerMain.classList.remove('open');
    }

    lastScrollPosition = currentScrollPosition;

  })

  // Show header.main when hover

  window.addEventListener('mousemove', (e) => {
    if (header.className.includes('scroll') && e.clientY < 90) {
      headerMain.classList.add('open-on-hover');
    } else {
      headerMain.classList.remove('open-on-hover');
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
