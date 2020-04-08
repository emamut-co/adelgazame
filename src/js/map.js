jQuery(document).ready(function ($) {
  let cordinates = [-0.18337695286205088, -78.50181519985199],
    map = L.map('map', { scrollWheelZoom: false }).setView(cordinates, 15)

  L.tileLayer.provider('CartoDB.Voyager').addTo(map)

  let customIcon = L.icon({
    iconUrl: themePath + '/img/marker.png',
    // shadowUrl: 'leaf-shadow.png',

    iconSize: [35, 50], // size of the icon
    // shadowSize: [50, 64], // size of the shadow
    iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
  });

  L.marker(cordinates, {icon: customIcon}).addTo(map)
})
