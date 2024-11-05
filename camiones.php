<?php require "login/loginheader.php"; ?>
<!DOCTYPE html>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Sistema SIG Salsipuedes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
    <link href="css/main.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="maps.css" />
	<script src="mapsgetgeo.js"></script>

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
    <!--<form class="form-inline my-2 my-lg-0" action="">
        <div class="form-group">
          <input type="text" name="address" id="address" placeholder="Calle" style="width: 130px;"/>
		  <input type="text" name="nro" id="nro" placeholder="Nº" style="width: 70px;"/>
        </div>
        <button id='search' class="btn btn-default">Buscar</button>
      </form>-->
	  <form class="form-inline my-2 my-lg-0" action="">
        <div class="form-group">
		  <input type="text" name="lat" id="lat" placeholder="Latitud"/>
		  <input type="text" name="lng" id="lng" placeholder="Longitud"/>
        </div>
        <button id='bcoordenadas' class="btn btn-default">Coordenadas</button>
      </form>
  </div>
</nav>
	  

 <!-- 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">WebSig</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   
	<ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
	
	<ul class="navbar-nav mr-auto">
	<li class="nav-item active">
	<form class="navbar-form navbar-left"" action="">
        <div class="form-group">
          <input type="text" name="address" id="address" placeholder="Calle" style="width: 130px;"/>
		  <input type="text" name="nro" id="nro" placeholder="Nº" style="width: 70px;"/>
        </div>
        <button id='search' class="btn btn-default">Buscar</button>
      </form>
	  <form class="navbar-form navbar-left" Style="display: inline-flex;" action="">
        <div class="form-group">
		  <input type="text" name="lat" id="lat" placeholder="Latitud"/>
		  <input type="text" name="lng" id="lng" placeholder="Longitud"/>
        </div>
        <button id='bcoordenadas' class="btn btn-default">Coordenadas</button>
      </form>
	  </li>
    </ul>
   <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
-->
	
	<div id="map" style="display: contents;"></div> 
	
</div>
	
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCQWOtv1qxG4CJ9EisXsL27LRdQ_i--Xw&callback=initMap"></script>
	
<!-- Bootstrap core JavaScript
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqDpAsEVkH_Ksnu0JMf3EsRHhs3uC0oJ4<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqDpAsEVkH_Ksnu0JMf3EsRHhs3uC0oJ4&callback=initMap"></script>"></script>

    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	-->
	<script src="js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  </body>
</html>