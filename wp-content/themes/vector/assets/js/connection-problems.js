document.addEventListener('DOMContentLoaded', function () {

  const searchError = document.getElementsByClassName('search-error')[0];
  const questionsSelect = document.getElementsByClassName('questions-select');
  const numberError = document.querySelectorAll('.number-error p');
  const noErrorsFound = document.getElementsByClassName('no-errors-found')[0];

  if (searchError) {
    searchError.addEventListener('input', (e) => {
      for (let i = 0; i < numberError.length; i++) {
        let excerptTerm = numberError[i].innerHTML.slice(0, e.target.value.length);
        if (e.target.value.length === 0) {
          questionsSelect[i].classList.remove('d-none');
        } else if (excerptTerm === e.target.value) {
          questionsSelect[i].classList.remove('d-none');
        } else if (excerptTerm !== e.target.value) {
          questionsSelect[i].classList.add('d-none');
        }
      }
      const questionsSelectNone = document.querySelectorAll('.questions-select.d-none');
      if (questionsSelectNone.length === questionsSelect.length) {
        noErrorsFound.classList.remove('d-none');
      } else {
        noErrorsFound.classList.add('d-none');
      }
    })
  }

});
