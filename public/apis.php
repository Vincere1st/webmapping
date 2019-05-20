<!doctype html>
<html lang="en">
<head>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css"
          type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
          integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
          crossorigin=""/>
    <link rel="stylesheet" href="https://js.arcgis.com/4.11/esri/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title>WebMapping</title>
</head>

<body>
<?php require('_header.php') ?>
<div class="jumbotron p-5">
    <h1 class="display-3 text-light">Web Mapping</h1>
    <hr class="my-4 border-light">
    <h3 class="ml-5 text-light">La cartographie en ligne</h3>
</div>

<div class="container-fluid">
    <div class="row justify-content-around">
        <div class="card card-index text-white bg-primary col-md-3 m-1 text-center">
            <div class="card-header"><h3>OpenLayers 3.2</h3></div>
            <div class="card-body">
                <div id="mapOl" class="mapOl">
                </div>
            </div>
            <div class="card-footer">
                <div>
                    <h4>
                        <a class="text-light" href="https://openlayers.org/">https://openlayers.org/</a>
                    </h4>
                </div>
                <div>
                    <a type="button" class="btn btn-warning"  href="openlayer.php">Voir OpenLayers</a>
                </div>
            </div>
        </div>
        <div class="card card-index text-white bg-primary col-md-3 m-1 text-center">
            <div class="card-header"><h3>LeafLet 1.5</h3></div>
            <div class="card-body">
            </div>
            <div class="card-footer">
                <div>
                    <h4>
                        <a class="text-light" href="https://leafletjs.com/">https://leafletjs.com/</a>
                    </h4>
                </div>
                <div>
                    <a type="button" class="btn btn-warning"  href="leaflet.php">Voir LeafLet</a>
                </div>
            </div>
        </div>
        <div class="card card-index text-white bg-primary col-md-3 m-1 text-center">
            <div class="card-header"><h3>ESRI ArcGIS JS Api</h3></div>
            <div class="card-body">
                <div id="mapAG"></div>
            </div>
            <div class="card-footer">
                <div>
                    <h4>
                        <a class="text-light" href="https://developers.arcgis.com/javascript/">https://developers.arcgis.com/...</a>
                    </h4>
                </div>
                <div>
                    <a type="button" class="btn btn-warning"  href="arcgis.php">Voir ESRI ArcGIS</a>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin=""></script>
<script src="https://js.arcgis.com/4.11/"></script>

<script src="assets/js/arcgis.js"></script>
<script src="assets/js/openlayer1.js"></script>
<script src="assets/js/leaflet.js"></script>

</body>
</html>
