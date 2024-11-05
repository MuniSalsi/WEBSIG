<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
$ahora = date("Y-n-j H:i:s");
$_SESSION["ultimoAcceso"] = $ahora;
if (!isset($_SESSION['username'])) 
{
    header("location:login/main_login.php");
	echo $_SESSION["ultimoAcceso"];
}
?>