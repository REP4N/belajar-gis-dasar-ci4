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


//marker
const marker2 = L.icon({
    iconUrl: '<?= base_url('marker/pin-map.png')?>',
    shadowUrl: 'leaf-shadow.png',

    iconSize:     [35, 45], // size of the icon
});
L.marker([-0.019258636426972647, 109.33223244109004], {icon:marker2})
.bindPopup("<img src='<?= base_url('gambar/warungA.jpg')?>'width='150px'><br>" +
"<b>Lokasi A</b><br>" +
"Alamat : Jl. Alamat A <br>" +
"Kec : Kecamatan A <br>")
.addTo(map);

L.marker([-0.012392181748361963, 109.31163307687747])
.bindPopup("<img src='<?= base_url('gambar/warungB.jpeg')?>'width='150px'><br>" +
"<b>Lokasi B</b><br>" +
"Alamat : Jl. Alamat B <br>" +
"Kec : Kecamatan B <br>")
.addTo(map);

//costum marker
const marker1 = L.icon({
    iconUrl: '<?= base_url('marker/home.png')?>',
    shadowUrl: 'leaf-shadow.png',

    iconSize:     [35, 45], // size of the icon
});
L.marker([-0.0329915448557901, 109.30785652677181], {icon:marker1})
.bindPopup("<b>Lokasi C</b><br>" +
"Alamat : Jl. Alamat C <br>" +
"Kec : Kecamatan C <br>")
.addTo(map);

L.marker([-0.03676809437486012, 109.32639595456314])
.bindPopup("<b>Lokasi D</b><br>" +
"Alamat : Jl. Alamat D <br>" +
"Kec : Kecamatan D <br>")
.addTo(map);

L.marker([-0.03985799840876431, 109.34939857793385])
.bindPopup("<b>Lokasi E</b><br>" +
"Alamat : Jl. Alamat E <br>" +
"Kec : Kecamatan E <br>")
.addTo(map);
</script>