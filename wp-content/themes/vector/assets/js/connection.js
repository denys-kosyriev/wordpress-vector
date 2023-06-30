document.addEventListener('DOMContentLoaded', function () {

  // Switching form and tabs

  const tariffsForm = document.getElementsByClassName('tariffs-form')[0];
  const buttons = document.getElementsByClassName('btn-switch');

  for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', () => {
        for (let t = 0; t < buttons.length; t++) {
          buttons[t].classList.remove('active');
        }
        buttons[i].classList.add('active');
        if (buttons[i].innerHTML === 'Інтернет') {
          console.log('net')
          tariffsForm.classList.remove('form-tv');
        } else if (buttons[i].innerHTML === 'Телебачення') {
          console.log('tv')
          tariffsForm.classList.add('form-tv')
        }
      }
    )
  }

})