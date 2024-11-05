<!DOCTYPE html>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Sistema SIG Salsipuedes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="maps.css" />
	<script src="mapsTalita.js"></script>

</head>

  <body> 
<!-- Fixed navbar -->

 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">WebSig</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <!--  <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>-->
      </ul>
      <form class="navbar-form navbar-left" action="">
        <div class="form-group">
          <input type="text" name="address" id="address" placeholder="Calle" style="width: 130px;"/>
		  <input type="text" name="nro" id="nro" placeholder="Nº" style="width: 70px;"/>
        </div>
        <button id='search' class="btn btn-default">Buscar</button>
      </form>
	  <form class="navbar-form navbar-left" action="">
        <div class="form-group">
		  <input type="text" name="lat" id="lat" placeholder="Latitud"/>
		  <input type="text" name="lng" id="lng" placeholder="Longitud"/>
        </div>
        <button id='bcoordenadas' class="btn btn-default">Coordenadas</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login/logout.php">Salir</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
		  
		  <?php echo $_SESSION['username'];?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Mi cuenta (Proximamente)</a></li>
            <li><a href="#">Cambiar contrase&ntilde;a (Proximamente)</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="login/logout.php">Cerrar Sesi&oacute;n</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	
	<div id="map"></div> 

	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqDpAsEVkH_Ksnu0JMf3EsRHhs3uC0oJ4&callback=initMap"></script>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  </body>
</html>