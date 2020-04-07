jQuery(document).ready(function ($) {
  let cordinates = [-0.18337695286205088, -78.50181519985199],
    map = L.map('map', { scrollWheelZoom: false }).setView(cordinates, 15)

  L.tileLayer.provider('CartoDB.Voyager').addTo(map)
  L.marker(cordinates).addTo(map)
})
