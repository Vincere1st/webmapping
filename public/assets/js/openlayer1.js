$(document).ready(function() {
    var map = new ol.Map({
        target: 'mapOl',
        controls : ol.control.defaults().extend([
//>>ScaleBar
            new ol.control.ScaleLine(),
//>>SliderZoom
            new ol.control.ZoomSlider(),
//>>SliderZoom
            new ol.control.OverviewMap(),
        ]),
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
        ],
        view: new ol.View({
            center: ol.proj.fromLonLat([1.8941782, 47.8939737]),
            zoom: 16
        })
    });
});


