<!doctype html>
<html lang="en">
<head>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css"
          type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title>WebMapping</title>
</head>
<body>
<?php require('_header.php') ?>
<div class="jumbotron p-1 m-0">
    <h1 class="display-3 text-light">Open Layers 5</h1>
    <!--    <hr class="my-4 border-light">
        <h3 class="ml-5 text-light">La cartographie en ligne</h3>-->
</div>

<div class="container-fluid m-0">
    <div class="row justify-content-center my-2">
        <div class="col-md-8">
            <div id="mapOl" class="mapOl">
            </div>
        </div>
    </div>

    <div class="row justify-content-center my-2">
        <div class="col-md-8">
            <a class="btn btn-warning  w-100" href="https://openlayers.org/en/latest/examples/" role="button"><h3>Tous les exemples</h3></a>
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
            <th scope="row"><h5>Navigation</h5></th>
            <td><h5>Mini-map customisé</h5></td>
            <td><a class="btn btn-primary" href="https://openlayers.org/en/latest/examples/overviewmap-custom.html" role="button">En savoir plus</a></td>
        </tr>
        <tr>
            <th scope="row"><h5>Animation</h5></th>
            <td><h5>Parcours</h5></td>
            <td><a class="btn btn-primary" href="https://openlayers.org/en/latest/examples/feature-move-animation.html" role="button">En savoir plus</a></td>
        </tr>
        <tr>
            <th scope="row"><h5>Fonctionnalité</h5></th>
            <td><h5>Swipe</h5></td>
            <td><a class="btn btn-primary" href="https://openlayers.org/en/latest/examples/layer-swipe.html" role="button">En savoir plus</a></td>
        </tr>
        <tr>
            <th scope="row"><h5>Fonctionnalité</h5></th>
            <td><h5>Position</h5></td>
            <td><a class="btn btn-primary" href="https://openlayers.org/en/latest/examples/mouse-position.html" role="button">En savoir plus</a></td>
        </tr>
        <tr>
            <th scope="row"><h5>Fonctionnalité</h5></th>
            <td><h5>Loupe</h5></td>
            <td><a class="btn btn-primary" href="https://openlayers.org/en/latest/examples/magnify.html" role="button">En savoir plus</a></td>
        </tr>
        <tr>
            <th scope="row"><h5>Fonctionnalité</h5></th>
            <td><h5>PopUp</h5></td>
            <td><a class="btn btn-primary" href="https://openlayers.org/en/latest/examples/overlay.html" role="button">En savoir plus</a></td>
        </tr>
        <tr>
            <th scope="row"><h5>Maps</h5></th>
            <td><h5>Relief</h5></td>
            <td><a class="btn btn-primary" href="https://openlayers.org/en/latest/examples/shaded-relief.html" role="button">En savoir plus</a></td>
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
<script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
<script src="assets/js/openlayer1.js"></script>

</body>
</html>
