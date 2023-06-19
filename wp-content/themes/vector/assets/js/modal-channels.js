document.addEventListener('DOMContentLoaded', function () {

  // Work channel list changes

  const btnAnalog = document.getElementsByClassName('btn-analog')[0];
  const btnDigital = document.getElementsByClassName('btn-digital')[0];
  const analogChannels = document.getElementsByClassName('analog-channels')[0];
  const digitalChannels = document.getElementsByClassName('digital-channels')[0];
  document.addEventListener('click', (e) => {
    const clickBtnAnalog = e.composedPath().includes(btnAnalog);
    const clickBtnDigital = e.composedPath().includes(btnDigital);
    if (clickBtnAnalog) {
      btnAnalog.classList.add('active');
      btnDigital.classList.remove('active');
      analogChannels.classList.remove('d-none');
      digitalChannels.classList.add('d-none');
    } else if (clickBtnDigital) {
      btnAnalog.classList.remove('active');
      btnDigital.classList.add('active');
      digitalChannels.classList.remove('d-none');
      analogChannels.classList.add('d-none');
    }
  })

});