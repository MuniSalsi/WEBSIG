<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Sistema SIG Salsipuedes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="maps.css" />
	<script src="maps.js"></script>

</head>
<body> 

<div class="container-fluid">

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index: 100;">
  <a class="navbar-brand" href="#">
  WebSig</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	  <form class="form-inline my-2 my-lg-0" action="">
        <div class="form-group">
		  <input type="text" name="lat" id="lat" placeholder="Latitud"/>
		  <input type="text" name="lng" id="lng" placeholder="Longitud"/>
        </div>
        <button id='bcoordenadas' class="btn btn-default">Coordenadas</button>
      </form>
  </div>
</nav>
	
<div id="map" style="display: contents;"></div> 	
	
</div>

	
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCQWOtv1qxG4CJ9EisXsL27LRdQ_i--Xw&callback=initMap"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  </body>
</html>