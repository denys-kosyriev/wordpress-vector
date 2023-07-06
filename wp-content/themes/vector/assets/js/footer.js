document.addEventListener('DOMContentLoaded', function () {

  // Show the current year

  const currentYear = new Date;
  document.getElementsByClassName('currentYear')[0].textContent = `${currentYear.getFullYear()}`;

});
