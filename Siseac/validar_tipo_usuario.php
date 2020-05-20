<?php
session_start();
//     echo "*foto_";
//	echo $_SESSION["foto"];
//echo "*username_";
//	echo $_SESSION["account_name"];// create SESSION  
//        echo "*Tipo_usuario_";
//	echo $_SESSION["tipo_usuario"];	// create SESSION 
//                echo "*Email_";
//               	echo $_SESSION["email"]; // create SESSION  
//                    echo "*Estatus_";
//	echo $_SESSION["estatus"];
//                

   	
if (!$_SESSION["account_name"]){

   header('Location: index.php');
 
  }else if($_SESSION["tipo_usuario"]==1 && $_SESSION["estatus"]==1){
   	// create SESSION  

			   header('Location: profesor/profile.php');
  }
    else if($_SESSION["tipo_usuario"]==2 && $_SESSION["estatus"]==1){
   	// create SESSION  

			   header('Location: directorc/AdminDirectorC.php');
  }
   else if($_SESSION["tipo_usuario"]==3 && $_SESSION["estatus"]==1){
   	// create SESSION  

			   header('Location: admin/index.php');
  } else if($_SESSION["tipo_usuario"]==4 && $_SESSION["estatus"]==1){
   	// create SESSION  

			   header('Location: rector/index.php');
  }else if($_SESSION["estatus"]==2){
  		echo '<script type="text/javascript">';				
	echo 'alert("Error usuario desactivado'.$error.'");';
	echo 'window.location.assign("index.php");';
	echo '</script>';

 
  }


?>

<a href="salir.php" >Logout</a>