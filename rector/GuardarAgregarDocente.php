<!DOCTYPE html>
<html>
<head>
	<title>Cargando...</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	<!-- Include the heartcode canvasloader js file -->
	<script src="http://heartcode-canvasloader.googlecode.com/files/heartcode-canvasloader-min-0.9.1.js"></script>
	
	
	<style type="text/css">
		body, html {
			margin:0;
			padding:0;
			overflow:hidden;
			background-color:#ffffff;
		}
		.wrapper {
			position:absolute;
			top:50%;
			left:50%;
		}
	</style>
</head>
<body>
	<!-- Create a div which will be the canvasloader wrapper -->	
	<div id="canvasloader-container" class="wrapper"></div>
		
<!--	 This script creates a new CanvasLoader instance and places it in the wrapper div -->
	<script type="text/javascript">
		var cl = new CanvasLoader('canvasloader-container');
		cl.setShape('square'); // default is 'oval'
		cl.setDiameter(57); // default is 40
		cl.setDensity(96); // default is 40
		cl.setRange(1); // default is 1.3
		cl.setSpeed(4); // default is 2
		cl.setFPS(29); // default is 24
		cl.show(); // Hidden by default
		
		// This bit is only for positioning - not necessary
		  var loaderObj = document.getElementById("canvasLoader");
  		loaderObj.style.position = "absolute";
  		loaderObj.style["top"] = cl.getDiameter() * -0.5 + "px";
  		loaderObj.style["left"] = cl.getDiameter() * -0.5 + "px";
    </script>
    
    	<?php
	include('../mvc/modelo.php');
        date_default_timezone_set('Mexico/General');  
             $Seani = new Seani();	
   

echo $idusuario=$_POST['docente']; 
echo $idmateria = $_POST['materia'];
     $estatus=1; 
               $idfic=0;
                            $fecha = date('Y-m-d H:i:s');

//   "<li>{$idmateria[$i]}</li> ";
     //$Seani->obteneMatrizCompetenciaActual2($estatus,$idusuario,$idmateria,$fecha);    
     $Seani->InsertMatrizCompetencias2($estatus, $idusuario, $idmateria, $fecha);    
        //$Seani->InsertMatrizCompetencias($idfic,$estatus,$idusuario,$idmateria[$i],$fecha);
  
   
   
    
      
   echo '<script type="text/javascript">';
            echo 'alert("Docente Agregado Exitosamente");';
	echo 'window.close();';
            echo '</script>';
             
             
          
             
             
          
		?>
</body>
</html>