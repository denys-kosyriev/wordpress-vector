document.addEventListener('DOMContentLoaded', function () {

  //   Change location

  const locationSelect = document.getElementsByClassName('change-location')[0];

  locationSelect.addEventListener('change', function () {
    let url = new URL(window.location.href);
    url.searchParams.delete('location');
    url.searchParams.append('location', `${locationSelect.options[locationSelect.selectedIndex].value}`);
    window.location.href = `./${url}`
  })

});
