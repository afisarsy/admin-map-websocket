

<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

<div id='map' style='width: 400px; height: 300px;'></div>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiYWZpc2Fyc3kiLCJhIjoiY2t4cWtjaXg2MnAxNjJ2b2Mzc2ZlMXRxaCJ9.M_SICktIShHN_PEZRzKlcw';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11'
    });
</script>