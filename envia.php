	<?php

$para= "ventas@mipuerta.com.mx";
$nombre=$_POST["nombre"];
$asunto="purmex enviado por: $nombre ".$_POST["asunto"];
$mensaje=$_POST["mensaje"];
$de =$_POST["correo"];
$tel=$_POST["telefono"];


$headers = "MINE-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .="From: $de \r\n";
$headers .="Asunto: $mensaje \r\n";
$headers .="Telefono de contacto: $tel ; \r\n Subject: $asunto \r\n";


if(mail ($para,$asunto,$headers))
		
	 echo"<script type='text/javascript'>alert('ENVIO REALIZADO CON EXITO');window.location='index.php'</script>";

else
	
 echo"<script type='text/javascript'>alert('error al enviar');window.location='index.php'</script>";


?>