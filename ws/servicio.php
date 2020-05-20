<?php

// Incluye Librería y crea instancia de Servicio
include_once 'lib/nusoap.php';  

//Configuración del WebServie  
$servicio = new soap_server();  	//Crea instancia de servidor SOAP
$ns = "urn:miserviciowsdl";			//define targerNamespace
$servicio->configureWSDL("MiPrimerServicioWeb",$ns);	
$servicio->schemaTargetNamespace = $ns;


//Registra los Métodos soportados por el WEbService
$servicio->register("MiFuncion", //Registra método Mi Funcion
	array('num1' => 'xsd:integer', 'num2' => 'xsd:integer'), //Define parametros de entrada
	array('return' => 'xsd:string'), //Define parametros de Retorno
	 $ns //Nombre del Workspace
	 		// Accion soap   por default url + nombre de la funcion
	 		// estilo		rpc por default
	 		// Uso 			encoded por default
	 		//Documentacion
	);

$servicio->register("MiFuncion2", array('num1' => 'xsd:integer', 'num2' => 'xsd:integer'), array('return' => 'xsd:string'), $ns );

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$servicio->service($HTTP_RAW_POST_DATA);

function MiFuncion($num1, $num2){

 $resultadoSuma = $num1 + $num2;
 $resultado = "El resultado de la suma de " . $num1 . " + " .$num2 . " es: " . $resultadoSuma;	
 return $resultado;
 
}

function MiFuncion2($num1, $num2){
	$ResultadoResta = $num1 - $num2;
	$resultado = "Es resultado de la Resta de $num1 - $num2 es: " . $ResultadoResta;
	return $resultado;
}


?>