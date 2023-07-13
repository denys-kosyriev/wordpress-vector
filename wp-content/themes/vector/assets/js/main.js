document.addEventListener('DOMContentLoaded', function () {

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

  // Open modal form and get title tariff

  const modalForm = document.getElementsByClassName('modal-form')[0];
  const modalContent = document.getElementsByClassName('modal-content')[0];
  const titleTariffModal = document.getElementsByClassName('title-tariff-modal')[0];
  const titleTariffForModal = document.getElementsByClassName('title-tariff-for-modal');
  const getTitleTariffBtn = document.getElementsByClassName('get-title-tariff');
  const titleTariff = document.getElementsByClassName('title-tariff');
  const inputTitle = document.getElementsByClassName('input-title')[0];

  for (let i = 0; i < getTitleTariffBtn.length; i++) {
    getTitleTariffBtn[i].addEventListener('click', function () {
      inputTitle.value = titleTariff[i].innerHTML;
      modalForm.classList.remove('d-none');
      if (getTitleTariffBtn[i].className.includes('open-connect-tv-modal-js')) {
        modalContent.classList.add('form-tv');
      } else {
        modalContent.classList.remove('form-tv');
      }
      titleTariffModal.innerHTML = titleTariffForModal[i].innerHTML
      console.log(inputTitle.value)
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

});
