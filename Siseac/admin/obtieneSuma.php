<?php 

include('../mvc/modelo.php');
        $Seani = new Seani();	

$var = $_POST['enviaCarrera'];

echo '<label>Alumnos ya asignados a Estadías</label>';

$algo=$Seani->ObtenerSumatoria($var); //se agregó parametro //Se quita parametro

echo "<label id='res'>".$algo."</label>";

echo "<br><br>";

 ?>
