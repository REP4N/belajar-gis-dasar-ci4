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
	layers: [Streets]
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

L.polyline([
    [-0.047974063486022574, 109.31930621060623],
    [-0.035432332341108784, 109.33279807609232],
    [-0.05471999371971118, 109.34904532255793],
    [-0.04778403727143224, 109.35515425155323],
    [-0.039504870729789476, 109.34806435570422],
    [-0.031683115943570414, 109.35995708422514],
    [-0.03160594113340328, 109.36007025564595],
    [-0.025688113947362486, 109.36244517336137],
], {
    color: 'red',
    weight: 6,
})
.bindPopup("<img src='<?= base_url('gambar/jalan A.jpg')?>'width='150px'><br>" +
        "<b>Jalan B</b> <br>" +
        "Panjang : 5 km <br>"+
        "Panjang : 5 meter <br>")
.addTo(map);

L.polyline([
    [-0.020512551224514827, 109.3364118074914],
    [-0.009363357232268167, 109.32139369739434],
    [-0.005796392857856999, 109.31647272990104],
    [-0.006682539527652272, 109.31058291983796],
    [-0.005010170629151836, 109.30510971267063],
    [-0.004927740849608055, 109.30206918377041],
    [-0.007950545012138275, 109.29696168720322],
], {
    color: 'yellow',
    weight: 3,
})
    .bindPopup("<img src='<?= base_url('gambar/jalan B.jpg')?>'width='150px'><br>" +
        "<b>Jalan A</b> <br>" +
        "Panjang : 2 km <br>"+
        "Panjang : 4 meter <br>")
    .addTo(map);
</script>