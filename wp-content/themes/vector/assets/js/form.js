document.addEventListener('DOMContentLoaded', function () {

  // Download file

  const fileName = document.querySelector('.download-receipt .title');
  const changeFile = document.getElementsByClassName('change-file-btn')[0];
  const inputFile = document.getElementsByClassName('wpcf7-file')[0];
  inputFile.addEventListener('change', () => {
    if (inputFile.files.length > 0) {
      fileName.innerHTML = inputFile.files[0].name;
      changeFile.classList.remove('d-none');
    } else {
      fileName.innerHTML = 'Завантажити квитанцію';
      changeFile.classList.add('d-none');
    }
  });

});
