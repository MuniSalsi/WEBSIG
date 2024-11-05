<?php require "login/loginheader.php"; ?>

<?php 
	
	$expediente = '';
	$evento 	= '';
	$latitud	= '';
	$longitud	= '';
	$fecha		= '';
	$observacion= '';
    
	if(isset($_POST['boton']))
	{
   
		
				include_once ("conectar.php");
				$db=conectar_bd();		
				
				$news_titulo = $_POST['news_titulo'];
				$news_autor = $_POST['news_autor'];      			
				$cuerpo=htmlentities($_POST['main_editor'],ENT_QUOTES);
				$news_fecha = $_POST['news_fecha'];   
				
				
				// html_entity_decode($salida);
				//echo"<script> alert ('".$cuerpo."')</script>";
				$query= "insert into noticias (fecha, titulo, autor, texto, ocultar) values ('".
				$news_fecha."','".$news_titulo."', '".$news_autor."', '".$cuerpo."',0)";			
				$db->query ($query);
                 //si el envio fue exitoso reseteamos lo que el usuario escribio: 
				 	
				//echo '<script> alert ("Noticia Guardada.")</script>';
				$news_titulo = 'value="Titulo"';
				$news_fecha  = 'value="fecha (DD-MM-AAAA)"';
				$news_autor  = 'value="Autor / Fuente"';
				$mensaje     = "Nueva Noticia";         
			
				echo"<script> alert ('Noticia Guardada Correctamente.')</script>";
    }	
?> 

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Nuevo Evento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" media="screen">
</head>

<body>

<form class="form-horizontal">
<fieldset>


<!-- Form Name -->
<legend>Nuevo Evento</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nro expediente">Nº expediente</label>  
  <div class="col-md-4">
  <input id="Nro expediente" name="Nro expediente" type="text" placeholder="Nº expediente" class="form-control input-md" required="">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Evento">Evento</label>  
  <div class="col-md-4">
  <input id="Evento" name="evento" type="text" placeholder="Evento" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="latitud">Latitud</label>  
  <div class="col-md-4">
  <input id="latitud" name="latitud" type="text" placeholder="latitud" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="longitud">Longitud</label>  
  <div class="col-md-4">
  <input id="longitud" name="longitud" type="text" placeholder="longitud" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fecha">Fecha</label>  
  <div class="col-md-4">
  <input id="fecha" name="fecha" type="text" placeholder="DD/MM/AAAA" class="form-control input-md" required="">
  <span class="help-block">Fecha formato DD/MM/AAAA</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="observacion">Observacion</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="observacion" name="observacion">Detalle del evento</textarea>
  </div>
</div>

<!-- File Button
<div class="form-group">
  <label class="col-md-4 control-label" for="adjunto">Archivo/Documento</label>
  <div class="col-md-4">
    <input id="adjunto" name="adjunto" class="input-file" type="file">
  </div>
</div> --> 

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="guardar"></label>
  <div class="col-md-4">
    <button id="guardar" name="guardar" class="btn btn-primary">Guardar</button>
  </div>
</div>

</fieldset>
</form>

</body>
