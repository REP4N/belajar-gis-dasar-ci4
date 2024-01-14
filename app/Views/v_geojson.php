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
	center: [-0.7763089464872571, 118.22867292842429],
	zoom: 5,
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

$.getJSON("<?= base_url('provinsi/11.geojson') ?>",function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return{
                color: 'red',
                fillOpacity: 1.0,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/aceh.jpg')?>'width='150px'><br>" +
"<b>Provinsi Aceh</b><br>" +
"Penduduk : 100.000.000 Jiwa <br>" +
"Luas : 5.677.081 ha <br>")
    .addTo(map);
});

$.getJSON("<?= base_url('provinsi/12.geojson') ?>",function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return{
                color: 'green',
                fillOpacity: 1.0,
            }
        }
    }).addTo(map);
});

$.getJSON("<?= base_url('provinsi/13.geojson') ?>",function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return{
                color: 'yellow',
                fillOpacity: 1.0,
            }
        }
    }).addTo(map);
});

$.getJSON("<?= base_url('provinsi/14.geojson') ?>",function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return{
                color: '#690FDE',
                fillOpacity: 1.0,
            }
        }
    }).addTo(map);
});

$.getJSON("<?= base_url('provinsi/15.geojson') ?>",function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return{
                color: '#DE0FD4',
                fillOpacity: 1.0,
            }
        }
    }).addTo(map);
});

$.getJSON("<?= base_url('provinsi/16.geojson') ?>",function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return{
                color: '#0FA7DE',
                fillOpacity: 1.0,
            }
        }
    }).addTo(map);
});

$.getJSON("<?= base_url('provinsi/17.geojson') ?>",function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return{
                color: '#0FDED7',
                fillOpacity: 1.0,
            }
        }
    }).addTo(map);
});

$.getJSON("<?= base_url('provinsi/18.geojson') ?>",function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return{
                color: '#0FDE8B',
                fillOpacity: 1.0,
            }
        }
    }).addTo(map);
});

$.getJSON("<?= base_url('provinsi/19.geojson') ?>",function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return{
                color: '#DE650F',
                fillOpacity: 1.0,
            }
        }
    }).addTo(map);
});
</script>