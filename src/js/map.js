jQuery(document).ready(function ($) {
  let cordinates = [-0.18337695286205088, -78.50181519985199],
    map = L.map('map', { scrollWheelZoom: false }).setView(cordinates, 15)

  L.tileLayer.provider('CartoDB.Voyager').addTo(map)

  let customIcon = L.icon({
    iconUrl: themePath + '/img/marker.png',
    // shadowUrl: 'leaf-shadow.png',
    iconSize: [35, 50],
    // shadowSize: [50, 64],
    iconAnchor: [22, 94],
    shadowAnchor: [4, 62],
    popupAnchor: [-3, -76]
  });

  L.marker(cordinates, {icon: customIcon}).addTo(map)
})
