document.addEventListener('DOMContentLoaded', function () {

  // Languages list 'header'
  const language = document.getElementsByClassName('language');
  const languageName = document.getElementsByClassName('language-name');
  const languagesList = document.getElementsByClassName('languages-list');
  const languagesListLanguage = document.getElementsByClassName('languages-list-language');

  for (let i = 0; i < language[i]; i++) {
    language[i].addEventListener('click', (e) => {
      languagesList[i].classList.toggle('d-none');
      // const closeLanguagesList = e.composedPath().includes(language[i]);
      // if (!closeLanguagesList) {
      //   languagesList.classList.add('d-none');
      // } else if (closeLanguagesList) {
      // }
    })
  }

  // Array.from(languagesListLanguage).map(languageItem => {
  //   languageItem.addEventListener('click', () => {
  //     languageName.innerHTML = languageItem.innerHTML;
  //     Array.from(languagesListLanguage).map(item => {
  //       item.classList.remove('active');
  //     });
  //     if (languageName.innerHTML === languageItem.innerHTML) {
  //       languageItem.classList.add('active');
  //     }
  //   })
  // })

  // Position of tariffs and position of pagination tariffs
  const tariffsSlider = document.getElementsByClassName('tariffs-slider');
  const screenWidth = window.screen.width;

  Array.from(tariffsSlider).map((swiper) => {
    const wrapper = swiper.querySelector('.swiper-wrapper');
    const slide = swiper.getElementsByClassName('swiper-slide');
    const buttonPrev = swiper.querySelector('.swiper-button-prev');
    const buttonNext = swiper.querySelector('.swiper-button-next');
    if ((slide.length === 2 && screenWidth > 1439) ||
      (slide.length === 1 && screenWidth > 767)) {
      wrapper.classList.add('center');
    } else if (slide.length > 3 && screenWidth > 1439) {
      buttonPrev.classList.remove('d-none');
      buttonNext.classList.remove('d-none');
    }

    if ((slide.length === 1) ||
      (slide.length === 2 && screenWidth > 767) ||
      (slide.length === 3 && screenWidth > 1439)) {
      wrapper.classList.add('without-pagination');
    }
  })

  // Show the current year

  const currentYear = new Date;
  document.getElementsByClassName('currentYear')[0].textContent = `${currentYear.getFullYear()}`;

  // Slider 'tariffs-slider'

  if (document.getElementsByClassName('tariffs-slider')[0]) {
    new Swiper(".tariffs-slider", {
      slidesPerView: 1,
      spaceBetween: 20,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        1440: {
          slidesPerView: 3,
        }
      }
    })
  }

  // Work accordion

  const questionsSelects = document.getElementsByClassName('questions-select');
  const questionsAnswer = document.getElementsByClassName('questions-answer');
  const questionsIconSelect = document.getElementsByClassName('icon-select');
  const question = document.getElementsByClassName('question');

  for (let i = 0; i < questionsSelects.length; i++) {
    questionsSelects[i].addEventListener('click', (e) => {
      const clickSQuestion = e.composedPath().includes(question[i]);
      if (clickSQuestion) {
        questionsAnswer[i].style.maxHeight = questionsAnswer[i].scrollHeight + 'px';
        questionsAnswer[i].classList.toggle('show-answer');
        questionsIconSelect[i].classList.toggle('open');
        questionsSelects[i].classList.toggle('active');
      }
      if (!questionsAnswer[i].className.includes('show-answer')) {
        questionsAnswer[i].style.maxHeight = 0;
      }
    })
  }

  // Open modal tariff

  const modalForm = document.getElementsByClassName('modal-form')[0];
  const modalContent = document.getElementsByClassName('modal-content')[0];
  const tariffNetBtn = document.getElementsByClassName('open-connect-net-modal-js');
  const titleTariffForModal = document.getElementsByClassName('title-tariff-for-modal');
  const titleTariffModal = document.getElementsByClassName('title-tariff-modal');

  for (let i = 0; i < tariffNetBtn.length; i++) {
    tariffNetBtn[i].addEventListener('click', function () {
      modalContent.classList.remove('form-tv');
      modalForm.classList.remove('d-none');
      titleTariffModal[i].innerHTML = titleTariffForModal[i].innerHTML
    })
  }

  // Open modal form TV and All

  const tariffTVBtn = document.getElementsByClassName('open-connect-tv-modal-js');

  for (let i = 0; i < tariffTVBtn.length; i++) {
    tariffTVBtn[i].addEventListener('click', function () {
      modalContent.classList.add('form-tv');
      modalForm.classList.remove('d-none');
      titleTariffModal[i].innerHTML = titleTariffForModal[i].innerHTML
    })
  }

  // Open modal channels

  const modalChannels = document.getElementsByClassName('modal-channels')[0];
  const openDetailsTv = document.getElementsByClassName('open-details-tv');

  for (let i = 0; i < openDetailsTv.length; i++) {
    openDetailsTv[i].addEventListener('click', function () {
      modalChannels.classList.remove('d-none');
    })
  }

  // Close modals

  const modals = document.getElementsByClassName('modal');

  Array.from(modals).map((modal, index) => {
    const closeButton = document.getElementsByClassName('close-modal')[index];
    const modalContent = document.getElementsByClassName('modal-content')[index];
    closeButton.addEventListener('click', () => {
      modal.classList.add('d-none');
    })
    modal.addEventListener('click', (e) => {
      const closeModal = e.composedPath().includes(modalContent);
      if (!closeModal) {
        modal.classList.add('d-none');
      }
    })
  })

  // Open and close burger menu

  const burgerBtn = document.getElementsByClassName('burger-btn')[0];
  const burgerMenu = document.getElementsByClassName('burger-menu')[0];

  burgerBtn.addEventListener('click', (e) => {
    burgerBtn.classList.toggle('active');
    burgerMenu.classList.toggle('open-burger');
  })

  // Click scroll top

  const scrollUpBtn = document.getElementsByClassName('scroll-up')[0];
  if (scrollUpBtn) {
    scrollUpBtn.addEventListener('click', () => {
      window.scrollTo(0, 0);
    });
  }

  // Work channels list changes

  const tariffsForm = document.getElementsByClassName('tariffs-form')[0];
  const buttons = document.getElementsByClassName('btn-switch');

  for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', (e) => {
        for (let t = 0; t < buttons.length; t++) {
          buttons[t].classList.remove('active');
        }
        buttons[i].classList.add('active');
        // console.log(buttons[i].innerHTML)
        console.log(e)
        console.log(buttons[i].innerHTML === 'Телебачення')
        if (buttons[i].innerHTML === 'Інтернет') {
          tariffsForm.classList.remove('form-tv');
          //   } else if (buttons[i].innerHTML === 'Телебачення' ||
          //     buttons[i].innerHTML === 'Все разом') {
          // console.log(tariffsForm)
          //     tariffsForm.classList.add('form-tv');
        } else if (buttons[i].innerHTML === 'Телебачення') {
          console.log(tariffsForm)
          tariffsForm.classList.add('form-tv')
        }
      }
    )
  }

});
