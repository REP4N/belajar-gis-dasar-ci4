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

//circle
const markertower = L.icon({
    iconUrl: '<?= base_url('marker/tower1.jpg')?>',
    shadowUrl: 'leaf-shadow.png',

    iconSize:     [35, 45], // size of the icon
});
L.marker([-0.02612509082898957, 109.27077767118918], {icon:markertower}).addTo(map);
L.circle([-0.02612509082898957, 109.27077767118918], {
    radius: 700,
    color : 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
})
.bindPopup("informasi")
.addTo(map);

L.circle([-0.04535116084371463, 109.38441749709523], {
    radius: 500,
    color : 'green',
    fillColor: 'green',
})
.bindPopup("<img src='<?= base_url('gambar/warungA.jpg')?>'width='150px'><br>" +
"<b>Lokasi A</b><br>" +
"Alamat : Jl. Alamat A <br>" +
"Kec : Kecamatan A <br>")
.addTo(map);

L.circle([-0.05221761329527548, 109.28348061245362], {
    radius: 600,
    color : 'yellow',
    fillColor: 'yellow',
    }).addTo(map);
</script>