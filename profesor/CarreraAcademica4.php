<?php
    session_start();
if (!$_SESSION["account_name"]){

   header('Location: index.php');
 
  }else if($_SESSION["tipo_usuario"]!=1 ){
    // create SESSION  
         echo '<script type="text/javascript">';       
  echo 'alert("No tiene permiso acceder a esta zona'.$error.'");';
  echo 'window.location.assign("../index.php");';
  echo '</script>';
  }else if($_SESSION["estatus"]==2){
      echo '<script type="text/javascript">';       
  echo 'alert("No tiene permiso acceder a esta zona'.$error.'");';
  echo 'window.location.assign("../index.php");';
  echo '</script>';

 
  }


?>
<?php
//include('../Conectar.php');
try
{
	//Open database connection
	
//$con=conectarBD();

//  	require '../Conectar.php';
//$con=Db::getInstance();}
  include('../mvc/modelo.php');
  $Seani = new Seani();
$idusuario=$Seani->obteneIdusuario($_SESSION["account_name"]);
	$con2 = mysql_connect("localhost","uttlaxca_siseac","siseac2014");
	mysql_select_db("uttlaxca_siseac", $con2);


	//Getting records (listAction)
	if($_GET["action"] == "list")
	{
		//Get records from database
		$result = mysql_query("SELECT * FROM asoc_profes where user_ide='$idusuario';");
		
		//Add all records to an array
		$rows = array();
		while($row = mysql_fetch_array($result))
		{
		    $rows[] = $row;
		}

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);
	}
	//Creating a new record (createAction)
	else if($_GET["action"] == "create")
	{
		//Insert record into database
		
			$result = mysql_query("INSERT INTO asoc_profes(nombre, tipo, periodo,user_ide) VALUES('" . $_POST["nombre"] . "', '" . $_POST["tipo"] . "',  '" . $_POST["periodo"] . "','$idusuario' );");
		//Get last inserted record (to return to jTable)
		$result = mysql_query("SELECT * FROM asoc_profes WHERE id = LAST_INSERT_ID();");
		$row = mysql_fetch_array($result);

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Record'] = $row;
		print json_encode($jTableResult);
	}
	//Updating a record (updateAction)
	else if($_GET["action"] == "update")
	{
		//Update record in database
		$result = mysql_query("UPDATE asoc_profes SET nombre = '" . $_POST["nombre"] . "', tipo = " . $_POST["tipo"] . ",periodo = '" . $_POST["periodo"] . "' WHERE id = " . $_POST["id"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
	//Deleting a record (deleteAction)
	else if($_GET["action"] == "delete")
	{
		//Delete from database
		$result = mysql_query("DELETE FROM asoc_profes WHERE id = " . $_POST["id"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}

	//Close database connection
	mysql_close($con2);

}
catch(Exception $ex)
{
    //Return error message
	$jTableResult = array();
	$jTableResult['Result'] = "ERROR";
	$jTableResult['Message'] = $ex->getMessage();
	print json_encode($jTableResult);
}
	
?>