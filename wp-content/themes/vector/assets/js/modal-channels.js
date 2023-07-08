document.addEventListener('DOMContentLoaded', function () {

  // Work channels list changes

  const buttons = document.getElementsByClassName('btn-switch-channels');
  const tableChannels = document.getElementsByClassName('scroll-channels');
  tableChannels[0].classList.remove('d-none')
  for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', () => {
        for (let t = 0; t < buttons.length; t++) {
          buttons[t].classList.remove('active');
          tableChannels[t].classList.add('d-none')
        }
        buttons[i].classList.add('active');
        tableChannels[i].classList.remove('d-none');
      }
    )
  }

});
