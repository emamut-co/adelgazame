jQuery(document).ready(function ($) {
  $('#main-carousel-prev').on('click', function () {
    $('#main-carousel').carousel('prev')
  })
  $('#main-carousel-next').on('click', function () {
    $('#main-carousel').carousel('next')
  })

  let cordinates = [-0.18337695286205088, -78.50181519985199],
  map = L.map('map', { scrollWheelZoom: false }).setView(cordinates, 15)

  L.tileLayer.provider('Hydda.Full').addTo(map)
  L.marker(cordinates).addTo(map);
})