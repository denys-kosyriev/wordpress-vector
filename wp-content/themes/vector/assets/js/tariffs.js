document.addEventListener('DOMContentLoaded', function () {
  // console.log(pathname)
  //   Change location
  const locationSelect = document.getElementsByClassName('change-location')[0];
  // const location = document.querySelectorAll('.change-location option');
  // window.location.assign(`./?location=${locationSelect.options[0].attributes.value.nodeValue}`);

  // console.log(location[0].attributes.value.nodeValue)
  // window.document.location.href = `./?location=${locationSelect.options[locationSelect.selectedIndex].value}`;

  // console.log(locationSelect.options[0].attributes.value.nodeValue)
  locationSelect.addEventListener('change', function (e) {
    window.document.location.href = `./?location=${locationSelect.options[locationSelect.selectedIndex].value}`;
  })
});
