<script>
  function initialize() {
    var mapCanvas = document.getElementById('map');
    var mapOptions = {
      center: new google.maps.LatLng(57.1498817,-2.1960762),
      zoom: 12 ,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions)
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>
