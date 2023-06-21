document.addEventListener('DOMContentLoaded', function () {

  const searchError = document.getElementsByClassName('search-error')[0];
  const questionsSelect = document.getElementsByClassName('questions-select');
  const numberError = document.querySelectorAll('.number-error p');

  if (searchError) {
    searchError.addEventListener('input', (e) => {
      for (let i = 0; i < numberError.length; i++) {
        if (e.target.value.length === 0) {
          questionsSelect[i].classList.remove('d-none');
        } else if (numberError[i].innerHTML.slice(0, e.target.value.length) !== e.target.value) {
          questionsSelect[i].classList.add('d-none');
        } else if (numberError[i].innerHTML.slice(0, e.target.value.length) === e.target.value) {
          questionsSelect[i].classList.remove('d-none');
        }
      }
    })
  }

});
