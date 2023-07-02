document.addEventListener('DOMContentLoaded', function () {

  // Download file

  const fileName = document.querySelector('.download-receipt p');
  const changeFile = document.getElementsByClassName('change-file-btn')[0];
  const inputFile = document.getElementsByClassName('wpcf7-file')[0];
  inputFile.addEventListener('change', () => {
    if (inputFile.files.length > 0) {
      console.log(inputFile.files)
      let file = inputFile.files[0].name;
      fileName.innerHTML = file.slice(0, 30) + '...';
      changeFile.classList.remove('d-none');
    } else {
      fileName.innerHTML = 'Завантажити квитанцію';
      changeFile.classList.add('d-none');
    }
  });

});
