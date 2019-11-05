
      // for Google Map 地図表示するだけ
function initMap() {
  var mapPosition = {lat: 35.803061, lng: 139.718569}
  var mapArea = document.getElementById('maps');
  var mapOptions = {
center: mapPosition,
        zoom: 16,
  };
  var map = new google.maps.Map(mapArea, mapOptions);
}
