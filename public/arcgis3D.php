<!doctype html>
<html lang="en">
<head>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://js.arcgis.com/4.11/esri/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title>WebMapping</title>
</head>
<body>
<?php require('_header.php') ?>
<div class="jumbotron p-1 m-1">
    <h1 class="display-3 text-light">ESRI ArcGIS Javascript</h1>
    <!--    <hr class="my-4 border-light">
        <h3 class="ml-5 text-light">La cartographie en ligne</h3>-->
</div>

<div class="container-fluid p-1 m-0">
    <div class="row justify-content-center my-2" >
        <div class="col-md-8 mapcontainer ">
            <div id="mapAG"></div>
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

<script src="https://js.arcgis.com/4.11/"></script>

<script src="assets/js/arcgis3D.js"></script>

</body>
</html>
