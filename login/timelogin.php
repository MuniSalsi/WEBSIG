<?php
	$fechaGuardada = $_SESSION["ultimoAcceso"];
	$ahora = date("Y-n-j H:i:s");

	$tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada));
		if($tiempo_transcurrido >= 3600)
		{ // 1 x 60 x 60 = 1 horas...
			session_destroy();
			echo '<script>window.location="login/logout.php"</script>';  
		}else
		{
			$_SESSION["ultimoAcceso"] = $ahora;
		}
?>