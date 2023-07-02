document.addEventListener('DOMContentLoaded', function () {

  //   Change location

  const locationSelect = document.getElementsByClassName('change-location')[0];

  locationSelect.addEventListener('change', function () {
    let url = new URL(window.location.href);
    url.searchParams.delete('location');
    url.searchParams.append('location', `${locationSelect.options[locationSelect.selectedIndex].value}`);
    window.location.href = `./${url}`
  })

  const buttons = document.getElementsByClassName('btn-switch');

  for (let i = 0; i < buttons.length; i++) {
    if (window.location.search.includes('type=%D0%86%D0%BD%D1%82%D0%B5%D1%80%D0%BD%D0%B5%D1%82') && buttons[i].innerHTML === 'Інтернет' ||
      window.location.search.includes('type=%D0%A2%D0%B5%D0%BB%D0%B5%D0%B1%D0%B0%D1%87%D0%B5%D0%BD%D0%BD%D1%8F') && buttons[i].innerHTML === 'Телебачення' ||
      !window.location.search.includes('type') && buttons[i].innerHTML === 'Все разом') {
      buttons[i].classList.add('active');
    }
    buttons[i].addEventListener('click', () => {
        let url = new URL(window.location.href);
        if (buttons[i].innerHTML === 'Все разом') {
          url.searchParams.delete('type');
        } else {
          url.searchParams.append('type', `${buttons[i].textContent}`);
        }
        window.location.href = `./${url}`
      }
    )
  }

  const sliders = document.getElementsByClassName('sliders-js');
  const swipers = document.getElementsByClassName('swiper');
  const description = document.getElementsByClassName('description');

  for (let i = 0; i < sliders.length; i++) {
    const swiperTariffs = swipers[i].querySelectorAll('.swiper-slide');
    if (window.location.search.length === 0 && i !== 0 ||
      swiperTariffs.length === 0) {
      sliders[i].classList.add('d-none');
      swipers[i].classList.add('d-none');
      description[i].classList.add('d-none');
    }
  }

});
