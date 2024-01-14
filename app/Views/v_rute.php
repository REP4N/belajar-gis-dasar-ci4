<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>Jarak (*Meter)</label>
            <input class="form-control" name="jarak" id="Jarak">
        </div>
    </div>
</div>

<div id="map" style="width: 100%; height: 100vh;"></div>

<script>
  var Streets = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoicmVwYW4yMDEyMjAwNDEiLCJhIjoiY2xvczZ3bTg3MDQ0aDJrbnJqajh4Z2x2MSJ9.zp-NOWWqogtVOsYfax5fhQ', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11'
});

var Satellite = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoicmVwYW4yMDEyMjAwNDEiLCJhIjoiY2xvczZ3bTg3MDQ0aDJrbnJqajh4Z2x2MSJ9.zp-NOWWqogtVOsYfax5fhQ', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/satellite-v9'
});

var OpenStreetMap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});

var Dark = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoicmVwYW4yMDEyMjAwNDEiLCJhIjoiY2xvczZ3bTg3MDQ0aDJrbnJqajh4Z2x2MSJ9.zp-NOWWqogtVOsYfax5fhQ', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/dark-v10'
});

// Add more layers here...

var Stamen = L.tileLayer('YOUR_TILE_URL_HERE', {
    attribution: 'Your attribution here'
});

var CartDB = L.tileLayer('ANOTHER_TILE_URL_HERE', {
    attribution: 'Another attribution here'
});


    const map = L.map('map', {
	center: [-0.023378509107682747, 109.32605263182627],
	zoom: 13,
	layers: [Satellite]
});

const baseLayers = {
	'Streets': Streets,
	'Satellite': Satellite,
    'OpenStreetMap ': OpenStreetMap ,
	'Dark': Dark,
    'Stamen': Stamen,
    'CartDB': CartDB,
};

const layerControl = L.control.layers(baseLayers, null, {collapsed: false}).addTo(map);


//rute
var routingControl = L.Routing.control({
  waypoints: [
    L.latLng(0.012134137989639467, 109.29246916375841), //lokasi asal
    L.latLng(-0.02501586442638669, 109.36255783184069) //lokasi tujuan
  ]
}).addTo(map);

//mengambil Jarak
routingControl.on('routesfound', function(e) {
    var routes = e.routes;
    var summary = routes[0].summary;
    var totalDistance = summary.totalDistance;
    //kirim nilai jaraknya ke elemen input
    document.getElementById('Jarak').value = totalDistance;
    animasiCar(routes[0]);
});

//membuat animasi perjalanan
function animasiCar(route) {
    var iconMobil = L.icon({
    iconUrl: '<?= base_url('marker/mobil.png')?>',
    iconSize:     [30, 40], // size of the icon
});
    var mobil = L.marker([route.coordinates[0].lat, route.coordinates[0].lng],{
        icon: iconMobil
    }).addTo(map);

    var index = 0;
    var maxIndex = route.coordinates.length - 1;

    function animate() {
        mobil.setLatLng([route.coordinates[index].lat, route.coordinates[index].lng]);
        index++;
        if (index > maxIndex) {
            index = 0;
        }
        setTimeout(animate, 200);
    }
    animate();
}

</script>