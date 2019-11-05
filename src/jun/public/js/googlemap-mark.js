//var mapDiv = document.getElementById( "map-canvas" ) ;
var mapDiv = document.getElementById( "maps" ) ;

// Map
var map = new google.maps.Map( mapDiv, {
  center: new google.maps.LatLng( 35.71, 139.8107 ) ,
  zoom: 11 ,
} ) ;

// Marker
var marker = new google.maps.Marker( {
  map: map ,
  position: new google.maps.LatLng( 35.71, 139.8107 ) ,
} ) ;
