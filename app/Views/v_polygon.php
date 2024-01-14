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

L.polygon([
    [-0.018930751923193437, 109.32458495293926],
    [-0.018803184968845425, 109.32549438189378],
    [-0.019062433940483976, 109.32553964758833],
    [-0.019190000894641155, 109.32462198850754],
], {
    color: 'red',
    fillOpacity: 0.7,
})
.bindPopup("<img src='<?= base_url('gambar/gedung B.jpg')?>'width='150px'><br>" +
        "<b>wilayah B</b> <br>" +
        "Panjang : 2 km <br>"+
        "Panjang : 4 meter <br>")
.addTo(map);

L.polygon([
    [-0.02000853990895823, 109.32801419986595],
    [-0.020819247154319827, 109.32782914710505],
    [-0.020797217066185553, 109.32771018461591],
    [-0.020616570343354734, 109.32774543276082],
    [-0.020581322202294094, 109.32762206425359],
    [-0.020788405030926754, 109.3275691920362],
    [-0.020722314766498485, 109.32728280085861],
    [-0.02080823211023997, 109.32726077076804],
    [-0.02078179600448902, 109.32716163536043],
    [-0.02070469069598089, 109.32717925943288],
    [-0.020625382378626256, 109.3268510110832],
    [-0.020237652826539387, 109.32675187567557],
    [-0.019953594516663696, 109.32691710072356],
    [-0.01978652458280671, 109.32703362849988],
    [-0.019946574773813557, 109.32774262281501],
], {
    color: 'yellow',
    fillOpacity: 1,
    })
    .bindPopup("<img src='<?= base_url('gambar/gedung A.jpg')?>'width='150px'><br>" +
        "<b>wilayah A</b> <br>" +
        "Panjang : 2 km <br>"+
        "Panjang : 4 meter <br>")
    .addTo(map);
</script>