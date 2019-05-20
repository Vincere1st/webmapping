<!doctype html>
<html lang="en">
<head>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
          integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
          crossorigin=""/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title>WebMapping</title>
</head>
<body>
<?php require('_header.php') ?>
<div class="jumbotron p-1 m-1">
    <h1 class="display-3 text-light">LeafLet</h1>
    <!--    <hr class="my-4 border-light">
        <h3 class="ml-5 text-light">La cartographie en ligne</h3>-->
</div>

<div class="container-fluid p-1 m-0">
    <div class="row justify-content-center my-2">
        <div class="col-md-8 mapcontainer">
            <div id="mapLeaflet"></div>
        </div>
    </div>

    <div class="row justify-content-center my-2">
        <div class="col-md-8">
            <a class="btn btn-warning  w-100" href="https://leafletjs.com/examples.html" role="button"><h3>Tous les exemples</h3></a>
        </div>
    </div>

    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">Theme</th>
            <th scope="col">Description</th>
            <th scope="col">Lien</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"><h5>Données</h5></th>
            <td><h5>GeoJSON</h5></td>
            <td><a class="btn btn-primary" href="https://leafletjs.com/examples/geojson/" role="button">En savoir plus</a></td>
        </tr>
        <tr>
            <th scope="row"><h5>Données</h5></th>
            <td><h5>Cartes</h5></td>
            <td><a class="btn btn-primary" href="https://leaflet-extras.github.io/leaflet-providers/preview/" role="button">En savoir plus</a></td>
        </tr>
        <tr>
            <th scope="row"><h5>Intéractivité</h5></th>
            <td><h5>Données intéractive</h5></td>
            <td><a class="btn btn-primary" href="https://leafletjs.com/examples/choropleth/" role="button">En savoir plus</a></td>
        </tr>
        <tr>
            <th scope="row"><h5>Extra</h5></th>
            <td><h5>Vidéo</h5></td>
            <td><a class="btn btn-primary" href="https://leafletjs.com/examples/video-overlay/" role="button">En savoir plus</a></td>
        </tr>
        </tbody>
    </table>
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

<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin=""></script>

<script src="assets/js/leaflet.js"></script>

</body>
</html>
