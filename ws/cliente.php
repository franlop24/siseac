<?php 
	require_once 'lib/nusoap.php';

	$cliente = new nusoap_client("http://localhost/siseac2017/ws/servicio.php", false);

	$num1 = 75;
	$num2 = 88;

	$parametros = array('num1'=>$num1, 'num2'=>$num2);
	$respuesta1 = $cliente->call("MiFuncion",$parametros);
	$respuesta2 = $cliente->call("MiFuncion2",$parametros);


	echo "Respuesta del la Funcion 1 <br>";
	print_r($respuesta1);

	echo "<hr>";

	echo "Respuesta del la Funcion 2 <br>";
	print_r($respuesta2);



 ?>