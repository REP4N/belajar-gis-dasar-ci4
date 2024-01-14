<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>Latitude</label>
            <input class="form-control" name="latitude" id="Latitude">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>Longitude</label>
            <input class="form-control" name="longitude", id="Longitude">
        </div>
    </div>

    <div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>Posisi</label>
            <input class="form-control" name="posisi", id="Posisi">
        </div>
    </div>

    <div class="col-sm-12">
        <br>
        <div id="map" style="width: 100%; height: 100vh;"></div>
    </div>
</div>





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
	zoom: 16,
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


var circle = L.circle([-0.023378509107682747, 109.32605263182627], {
    radius: 700,
    color : 'red',
    fillColor: 'red',
    fillOpacity: 0.5,
}).addTo(map);

var marker = L.marker([-0.023378509107682747, 109.32605263182627], {
    draggable : true,
});


//mengambil coordinat saat marker d pindah/geser 
marker.on('dragend',function(event) {
    var latlng = event.target.getLatLng();
    var distance = latlng.distanceTo(circle.getLatLng());

    if (distance <= circle.getRadius()) {
        //jika coordinat dalam radius lingkaran
        document.getElementById('Latitude').value = latlng.lat;
        document.getElementById('Longitude').value = latlng.lng;
        document.getElementById('Posisi').value = latlng.lat + ',' + latlng.lng;
    }else{
        //jika coordinat diluar radius lingkaran
        alert('Maaf, Titik coordinat yang diambil berada diluar jangkaun !!');
        event.target.setLatLng(circle.getLatLng());
        document.getElementById('Latitude').value = '';
        document.getElementById('Longitude').value = '';
        document.getElementById('Posisi').value = '';
    }



});

//mengambil coordinat saat map diclik
map.on('click',function(event) {
    var latlng = event.latlng;
    var distance = latlng.distanceTo(circle.getLatLng());
    if (distance <= circle.getRadius()) {
         //jika coordinat dalam radius lingkaran
        if (!marker) {
        marker = L.marker(event.latlng).addTo(map);
    } else {
        marker.setLatLng(event.latlng);
    }
        document.getElementById('Latitude').value = latlng.lat;
        document.getElementById('Longitude').value = latlng.lng;
        document.getElementById('Posisi').value = latlng.lat + ',' + latlng.lng;
        
    }else{
        //jika coordinat diluar radius lingkaran
        alert('Maaf, Titik coordinat yang diambil berada diluar jangkaun !!');
        event.target.setLatLng(circle.getLatLng());
        document.getElementById('Latitude').value = '';
        document.getElementById('Longitude').value = '';
        document.getElementById('Posisi').value = '';
    }

    
});

map.addLayer(marker);
</script>