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

<div class="container-fluid text-center">
        <h3>Schéma Webmapping</h3>
        <div>
            <img src="assets/img/scema.png" class="img-fluid"/>
        </div>
    <hr/>
        <h3>Généralités</h3>

        <h4>Site GeomaTick </h4>
        <p>Géomatique, SIG et Télédétection Open Sources</p>

        <div>
            <a type="button" class="btn btn-warning" href="https://www.geomatick.com">site GeoMatick</a>
        </div>

    <hr/>
    <h3>Introduce to WebMapping</h3>
    <div class="card-body">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/MA0AqcT5qbs" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>


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
<script src="assets/js/leaflet.js.js"></script>

</body>
</html>
