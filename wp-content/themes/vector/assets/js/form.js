document.addEventListener('DOMContentLoaded', function () {

  const fileName = document.querySelector('.download-receipt span');
  const inputFile = document.getElementsByClassName('wpcf7-file')[0];

  inputFile.addEventListener('change', () => {
    fileName.innerHTML = inputFile.files[0].name;
  });

});
