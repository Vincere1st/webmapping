var mymap = L.map('mapLeaflet').setView([ 47.8939737,1.8941782], 16);


L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mymap);


// AJOUT DE MAPS et CONTROL
/*
var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox.light', attribution: mbAttr}),
    streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});

var baseMaps = {
    "Grayscale": grayscale,
    "Streets": streets
};

var burgerIcon = L.icon({
    iconUrl: 'assets/img/burger-quiz.png',
    /!*    shadowUrl: 'leaf-shadow.png',*!/

    iconSize: [50, 50]
});

var markets = L.layerGroup();

    L.marker([47.8879193, 1.8910897],{icon: burgerIcon}).bindPopup('<h4>Lidl</h4><h5>Pas Bon et pas cher.</h5>').addTo(markets),
    L.marker([47.8873099, 1.8943076],{icon: burgerIcon}).bindPopup('<h4>Carrefour Market</h4><h5>Le Sodebo a pas cher.</h5>').addTo(markets),
    L.marker([47.8838676,1.8978648],{icon: burgerIcon}).bindPopup('<h4>KFC</h4><h5>Le roi du poulet à 6 pattes.</h5>').addTo(markets);

var overlays = {
    "Resto": markets
};

L.control.layers(baseMaps, overlays).addTo(mymap);
*/

//MARKER WCS
/*

L.marker([47.8939737,1.8941782]).addTo(mymap)
    .bindPopup('<div class="text-center">' +
        '<h3>Paul Rick West</h3>' +
        '<div><h4>was here</h4></div>' +
        '<img src="https://avatars-02.gitter.im/group/iv/3/57542c32c43b8c6019770da9">' +
        '</div>')
    .openPopup();

*/


//GEOLOCATION

/*mymap.locate({setView: true, maxZoom: 16});
function onLocationFound(e) {
    var radius = e.accuracy / 2;

    L.marker(e.latlng).addTo(mymap)
        .bindPopup("You are within " + radius + " meters from this point").openPopup();

    L.circle(e.latlng, radius).addTo(mymap);
}

mymap.on('locationfound', onLocationFound);
*/
