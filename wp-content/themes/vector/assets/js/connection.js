document.addEventListener('DOMContentLoaded', function () {

  // Switching form and tabs

  const tariffsForm = document.getElementsByClassName('tariffs-form')[0];
  const buttons = document.getElementsByClassName('btn-switch');
  const titleTariffModal = document.getElementsByClassName('title-tariff-modal')[0];

  for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', () => {
        for (let t = 0; t < buttons.length; t++) {
          buttons[t].classList.remove('active');
        }
        buttons[i].classList.add('active');
        if (buttons[i].innerHTML === 'Інтернет') {
          tariffsForm.classList.remove('form-tv');
          titleTariffModal.innerHTML = 'Підключити інтернет'
        } else if (buttons[i].innerHTML === 'Телебачення') {
          tariffsForm.classList.add('form-tv')
          titleTariffModal.innerHTML = 'Підключити телебачення'
        }
      }
    )
  }

})