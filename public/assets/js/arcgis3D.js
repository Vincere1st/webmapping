$(document).ready(function () {

    require([
        "esri/Map",
        "esri/views/SceneView",
        "esri/layers/OpenStreetMapLayer",
        "esri/widgets/ScaleBar",
        "esri/widgets/Locate",
        "esri/widgets/BasemapGallery",
        "esri/widgets/Print",
        "esri/WebMap"
    ], function(Map, SceneView, OpenStreetMapLayer, ScaleBar, Locate, BasemapGallery,Print, WebMap) {
            var map = new Map({
                basemap: "streets",
                ground: "world-elevation"
            });

            var view = new SceneView({
                container: "mapAG",
                map: map,
                scale: 5000000,
                center: [1.8941782, 47.8939737]
            });


//Intégration OSM
/*
        var osmLayer = new OpenStreetMapLayer();
        map.add(osmLayer);
*/

//ScaleBar
/*        var scaleBar = new ScaleBar({
            view: view,
            unit: "dual" // The scale bar displays both metric and non-metric units.
        });

        // Add the widget to the bottom left corner of the view
        view.ui.add(scaleBar, {
            position: "bottom-left"
        });*/

        // Toggle Visibility
/*
            // 1 - Create the widget
            var toggle = new BasemapToggle({
                // 2 - Set properties
                view: view, // view that provides access to the map's 'topo' basemap
                nextBasemap: "hybrid" // allows for toggling to the 'hybrid' basemap
            });

            // Add widget to the top right corner of the view
            view.ui.add(toggle, "top-right");
*/


//Basemap
        var basemapGallery = new BasemapGallery({
            view: view
        });

        // Add the widget to the top-right corner of the view
        view.ui.add(basemapGallery, {
            position: "top-right"
        });

//Locate Geolocation
/*
        var locateBtn = new Locate({
            view: view
        });

        // Add the locate widget to the top left corner of the view
        view.ui.add(locateBtn, {
            position: "top-left"
        });
*/

//Print
/*
        view.when(function() {
            var print = new Print({
                view: view,
                // specify your own print service
                printServiceUrl:
                    "https://utility.arcgisonline.com/arcgis/rest/services/Utilities/PrintingTools/GPServer/Export%20Web%20Map%20Task"
            });

            // Add widget to the top right corner of the view
            view.ui.add(print, "top-right");
        });
*/


    });
});
