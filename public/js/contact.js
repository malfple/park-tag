var myCenter = new google.maps.LatLng(-6.2017235,106.7813181);
function initialize() {
  var mapProp = {
    center: myCenter,
    zoom: 17,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("map"), mapProp);

  var marker = new google.maps.Marker({
    position: myCenter
  });
  marker.setMap(map);
}
google.maps.event.addDomListener(window, "load", initialize);