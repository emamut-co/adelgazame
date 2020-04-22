jQuery(document).ready(function ($) {
  mapCoordinates = mapCoordinates.split(',').map(Number)

  let map = L.map('map', { scrollWheelZoom: false }).setView(mapCoordinates, 15)

  L.tileLayer.provider('CartoDB.Voyager').addTo(map)

  let customIcon = L.icon({
    iconUrl: themePath + '/img/marker.png',
    iconSize: [35, 50],
    iconAnchor: [22, 94],
    shadowAnchor: [4, 62],
    popupAnchor: [-3, -76]
  });

  L.marker(mapCoordinates, {icon: customIcon}).addTo(map)
})
