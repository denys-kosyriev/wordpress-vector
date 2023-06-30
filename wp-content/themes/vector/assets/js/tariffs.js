document.addEventListener('DOMContentLoaded', function () {

  //   Change location
  window.document.location.href = `./?type=all`;

  const locationSelect = document.getElementsByClassName('change-location')[0];

  locationSelect.addEventListener('change', function () {
    window.document.location.href = `./?location=${locationSelect.options[locationSelect.selectedIndex].value}`;
  })

  const buttons = document.getElementsByClassName('btn-switch');

  for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', () => {
        for (let t = 0; t < buttons.length; t++) {
          buttons[t].classList.remove('active');
        }
        buttons[i].classList.add('active');
        if (buttons[i].innerHTML === 'Інтернет') {
          window.document.location.href = `./?type=net`;
        } else if (buttons[i].innerHTML === 'Телебачення') {
          window.document.location.href = `./?type=tv`;
        } else if (buttons[i].innerHTML === 'Все разом') {
          window.document.location.href = `./?type=all`;
        }
      }
    )
  }

});
