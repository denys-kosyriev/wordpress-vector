document.addEventListener('DOMContentLoaded', function () {

  // Switching form and tabs e
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

})