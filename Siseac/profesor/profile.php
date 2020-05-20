<?php
session_start();
if (!$_SESSION["account_name"]) {

//    header('Location: ../index.php');
    echo '<script type="text/javascript">';
    echo 'alert("No has iniciado sesión' . $error . '");';
    echo 'window.location.assign("../index.php");';
    echo '</script>';
} else if ($_SESSION["tipo_usuario"] != 1) {
    // create SESSION  
    echo '<script type="text/javascript">';
    echo 'alert("No tiene permiso acceder a esta zona' . $error . '");';
    echo 'window.location.assign("../index.php");';
    echo '</script>';
} else if ($_SESSION["estatus"] == 2) {
    echo '<script type="text/javascript">';
    echo 'alert("No tiene permiso acceder a esta zona' . $error . '");';
    echo 'window.location.assign("../index.php");';
    echo '</script>';
}
ini_set('session.bug_compat_42', "0");
ini_set('session.bug_compat_warn', "0");
?>

<style>
    /*
     * Copyright (c) 2013 Thibaut Courouble
     * http://www.cssflow.com
     *
     * Licensed under the MIT License:
     * http://www.opensource.org/licenses/mit-license.php
     *
     * View the Sass/SCSS source at:
     * http://www.cssflow.com/snippets/task-list/demo/scss
     *
     * Original PSD by Wassim Bourguiba: http://goo.gl/OUpkfy
     */

    @import url(http://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css);

    body {
        font: 8px/20px 'Lucida Grande', Verdana, sans-serif;
        color: #404040;
        background: #f2f8fc;
    }
    .a{
        font-size: 7px;
    }

    .tasks {
        margin: 40px auto;
        width: 205px;
        height: 1000px;
        background: white;
        border: 1px solid #cdd3d7;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .tasks-header {
        position: relative;
        line-height: 24px;
        padding: 7px 15px;
        color: #5d6b6c;
        text-shadow: 0 1px rgba(255, 255, 255, 0.7);
        background: #f0f1f2;
        border-bottom: 1px solid #d1d1d1;
        border-radius: 3px 3px 0 0;
        background-image: -webkit-linear-gradient(top, #f5f7fd, #e6eaec);
        background-image: -moz-linear-gradient(top, #f5f7fd, #e6eaec);
        background-image: -o-linear-gradient(top, #f5f7fd, #e6eaec);
        background-image: linear-gradient(to bottom, #f5f7fd, #e6eaec);
        -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), 0 1px rgba(0, 0, 0, 0.03);
        box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), 0 1px rgba(0, 0, 0, 0.03);
    }

    .tasks-title {
        line-height: inherit;
        font-size: 14px;
        font-weight: bold;
        color: inherit;
    }

    .tasks-lists {
        position: absolute;
        top: 50%;
        right: 10px;
        margin-top: -11px;
        padding: 10px 4px;
        width: 19px;
        height: 3px;
        font: 0/0 serif;
        text-shadow: none;
        color: transparent;
        font-size: 10px;
    }

    .tasks-lists:before {
        content: '';
        display: block;
        height: 3px;
        background: #8c959d;
        border-radius: 1px;
        -webkit-box-shadow: 0 6px #8c959d, 0 -6px #8c959d;
        box-shadow: 0 6px #8c959d, 0 -6px #8c959d;
    }

    .tasks-list-item {
        display: block;
        line-height: 24px;
        padding: 12px 15px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .tasks-list-item + .tasks-list-item {
        border-top: 1px solid #f0f2f3;
    }

    .tasks-list-cb {
        display: none;
    }

    .tasks-list-mark {
        position: relative;
        display: inline-block;
        vertical-align: top;
        margin-right: 12px;
        width: 15px;
        height: 15px;
        border: 2px solid #c4cbd2;
        border-radius: 12px;
    }

    .tasks-list-mark:before {
        content: '';
        display: none;
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -5px 0 0 -6px;
        height: 4px;
        width: 8px;
        border: solid #39ca74;
        border-width: 0 0 4px 4px;
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .tasks-list-cb:checked ~ .tasks-list-mark {
        border-color: #39ca74;
    }

    .tasks-list-cb:checked ~ .tasks-list-mark:before {
        display: block;
    }

    .tasks-list-desc {
        font-weight: bold;
        color: #8a9a9b;
        font-size:10px;
    }

    .tasks-list-cb:checked ~ .tasks-list-desc {
        color: #FF6900;
        text-decoration: underline;

    }


</style>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Siseac&trade; Perfil Profesor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Link shortcut icon-->
        <link rel="shortcut icon" type="image/ico" href="images/favicon.ico"/> 

        <!-- CSS Stylesheet-->
        <link type="text/css" rel="stylesheet" href="components/bootstrap/bootstrap.css" />
        <link type="text/css" rel="stylesheet" href="components/bootstrap/bootstrap-responsive.css" />
        <link type="text/css" rel="stylesheet" href="css/zice.style.css"/>


<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="components/flot/excanvas.min.js"></script><![endif]-->  

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="components/ui/jquery.ui.min.js"></script> 
        <script type="text/javascript" src="components/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="components/ui/timepicker.js"></script>
        <script type="text/javascript" src="components/colorpicker/js/colorpicker.js"></script>
        <script type="text/javascript" src="components/form/form.js"></script>
        <script type="text/javascript" src="components/elfinder/js/elfinder.full.js"></script>
        <script type="text/javascript" src="components/datatables/dataTables.min.js"></script>
        <script type="text/javascript" src="components/fancybox/jquery.fancybox.js"></script>
        <script type="text/javascript" src="components/jscrollpane/jscrollpane.min.js"></script>
        <script type="text/javascript" src="components/editor/jquery.cleditor.js"></script>
        <script type="text/javascript" src="components/chosen/chosen.js"></script>
        <script type="text/javascript" src="components/validationEngine/jquery.validationEngine.js"></script>
        <script type="text/javascript" src="components/validationEngine/jquery.validationEngine-es.js"></script>
        <script type="text/javascript" src="components/fullcalendar/fullcalendar.js"></script>
        <script type="text/javascript" src="components/flot/flot.js"></script>
        <script type="text/javascript" src="components/uploadify/uploadify.js"></script>       
        <script type="text/javascript" src="components/Jcrop/jquery.Jcrop.js"></script>
        <script type="text/javascript" src="components/smartWizard/jquery.smartWizard.min.js"></script>
        <script type="text/javascript" src="js/jquery.cookie.js"></script>
        <script type="text/javascript" src="js/zice.custom.js"></script>

        <!--        tabla de grado academicos-->
        <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
        <link href="scripts/jtable/themes/lightcolor/orange/jtable.css" rel="stylesheet" type="text/css" />

<!--	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>-->
        <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
        <script src="scripts/jtable/jquery.jtable.js" type="text/javascript"></script>


    </head>        
    <body>        

        <!-- Header -->
        <?php include_once('include/header.php'); ?><!-- End Header -->

        <!-- left_menu -->
        <?php include_once('include/leftmenu.php'); ?>

        <div id="content" >
            <div class="inner">

                <!-- menu -->
                <?php include_once('include/menu.php'); ?>

                <?php
                $idusuario = $Seani->obteneIdusuario($username);
                $DatosP = $Seani->obtenerDatosPersonales($idusuario);
                ?>
                <div class="row-fluid">

                    <!-- Widget -->


                </div><!-- row-fluid -->
                <!-- tabss -->
                <div class="row-fluid">

                    <!-- Widget -->
                    <div class="widget  span12 clearfix">
                        <div class="widget-header">
                            <span><i class="icon-bookmark"></i> Información</span>
                        </div><!-- End widget-header -->	
                        <div class="widget-content">

                            <div id="UITab" class="clearfix" style="position:relative;">
                                <ul class="tabs">
                                    <li><a href="#tab1"> Datos Personales </a></li>  
                                    <li><a href="#tab2"> Perfil Academico </a></li>    
                                    <li><a href="#tab3"> ITEC </a></li>  
                                    <li><a href="#tab4"> ITI</a></li>  
                                    <li><a href="#tab5"> INGEM</a></li>
                                    <li><a href="#tab6"> IMI</a></li>  
                                    <li><a href="#tab7"> IPOI</a></li>  
                                    <li><a href="#tab8">IDTM</a></li>
                                    <li><a href="#tab9">PIAM</a></li>
                                    <li><a href="#tab10">PIAP</a></li>   
                                </ul>

                                <div class="tab_container" >
                                    <!--tab1-->
                                    <div id="tab1" class="tab_content"> 
                                        <div class="load_page">
                                            <div class="widget-content">    


                                                <div class="boxtitle"><i class="icon-hdd"></i> Fecha última actualización:   <span class="netip"><a href="#" class="red" title=""> <?php echo $DatosP["ultima_actualizacion"]; ?>   </a></span>
                                                </div>

                                                <form id="validation_demo" action="InsertdatosPersonales.php" method="post" enctype="multipart/form-data"> 

                                                    <div class="row-fluid">
                                                        <div class="span4">
                                                            <div class="profileSetting" >

                                                                <div class="avartar"><img src=<?php
                                                                    echo"'";
                                                                    echo $foto;
                                                                    echo"'";
                                                                    ?> width="180" height="180" alt="avatar" /></div>
                                                                <div class="avartar">
                                                                    <input type="file" name="archivo" id="archivo" class="fileupload" />
             <!--                                                       <input type="file" name="archivo" id="archivo" class="fileupload"/>-->
             <!--                                                   <p align="center"><span> O </span>Tomo foto con <a class="takeWebcam">Webcam</a></p>-->


                                                                </div>
                                                                <p align="center" style="color:#FF6900; font-size:14px; "> Tu foto se guardará al enviar el formulario</p>
                                                            </div>
                                                            <hr/>
                                                        </div>

                                                        <div class="span8">
                                                            <!--                                            <div class="section webcam">
                                                                                                                <label> Toma foto<small>con  webcam</small></label>   
                                                                                                                <div> 
                                                                                                                              <div id="screen"></div>
                                                                                                                              <div class="buttonPane">
                                                                                                                                  <a id="takeButton" class="uibutton">Toma</a> <a id="closeButton" class="uibutton special">Cerrar</a>
                                                                                                                              </div>
                                                                                                                              <div class="buttonPane hideme">
                                                                                                                                  <a id="uploadAvatar" class="uibutton confirm">Subir Foto</a> <a id="retakeButton" class="uibutton special">volve a tomar</a> 
                                                                                                                            </div>
                                                                                                                </div>
                                                                                                        </div>-->

                                                            <div class="section ">
                                                                <label>Máximo grado de estudio <small></small></label>   
                                                                <div>
                                                                    <select class="small" name="titulo">
                                                                        <option value="0"  ></option>
                                                                        <?php
                                                                        $GradoTitulo = $Seani->obteneLicenciautura($idusuario);
                                                                        echo "<option  selected='selected'   value='" . $GradoTitulo["id"] . "'>- " . $GradoTitulo["grado"] . " </option>";

                                                                        include("../Conecta2.php");

                                                                        $conn = new Conexion();
                                                                        $conn->conectarBD();

                                                                        $sql = "SELECT * FROM prf_titulo";
                                                                        $estado = $conn->consultar($sql);

                                                                        while ($registro = mysql_fetch_array($estado)) {
//                                                                       
                                                                            echo "<option value='" . $registro["id"] . "'>" . $registro["nombre"] . " </option>";
                                                                        }
                                                                        ?>



                                                                        <!--                                                   <option value="1"  >Lic.</option>
                                                                                                                           <option value="2"  >Ing.</option>
                                                                                                                           <option value="3"  >M. en C.</option>
                                                                                                                           <option value="4"  >C.P.</option>
                                                                                                                           <option value="5"  >Dr.</option>-->
                                                                    </select>  
                                                                </div>

                                                                <input type="hidden"  value="<?php echo $idusuario ?>" name="id" id="id"  class="validate[required,minSize[3],maxSize[50],] medium"  />


                                                         


                                                            </div>
                                                            <div class="section">
                                                                <label>Fecha de Incorporación <small> a la UTT</small></label>   
                                                                <div><input type="text"   placeholder="aaaa-mm-dd" id="birthday1" class=" birthday  medium " name="fIncorporacion" size="15"

                                                                            <?php
                                                                            $sql2 = "SELECT * FROM prf_datopersonales where user_id='$idusuario';";
                                                                            $estado2 = $conn->consultar($sql2);
                                                                            while ($registro2 = mysql_fetch_array($estado2)) {
                                                                                echo "value='" . $registro2["fecha_incorporacion"] . "'";
                                                                            }
                                                                            ?>         



                                                                            /></div>
                                                            </div> 
                                                            <div class="section ">
                                                                <label>Puesto <small></small></label>   
                                                                <div>
                                                                    <select class="small" name="puesto">

                                                                        <?php
                                                                        $PuestoA = $Seani->obtenerPuesto($idusuario);
                                                                        echo "<option  selected='selected'   value='" . $PuestoA["id"] . "'>- " . $PuestoA["tipo"] . " </option>";

                                                                        $sql2 = "SELECT * FROM prf_tipo;";
                                                                        $estado2 = $conn->consultar($sql2);
                                                                        while ($registro2 = mysql_fetch_array($estado2)) {

                                                                            echo "<option value='" . $registro2["id"] . "'>" . $registro2["nombre"] . " </option>";
                                                                        }
                                                                        ?>                                                   

                                                                        <!--                                                   <option value="1"  >Profesor Asignatura</option>
                                                                                                                           <option value="2"  >Profesor Tiempo Completo </option>-->
                                                                    </select>  
                                                                </div>

                                                            </div>
                                                            <div class="section">
                                                                <label> E-MAIL <small></small></label>
                                                                <div>
                                                                    <input type="email"  value="<?php echo $DatosP["email"]; ?>" name="email" id="username"  class="validate[required,custom[email]]  large" disabled  />

                                                                </div>

                                                            </div>

                                                            <div class="section">
                                                                <label> TELÉFONO <small></small></label>
                                                                <div>
                                                                    <input type="text"      <?php
                                                                    $sql2 = "SELECT * FROM prf_datopersonales where user_id='$idusuario';";
                                                                    $estado2 = $conn->consultar($sql2);
                                                                    while ($registro2 = mysql_fetch_array($estado2)) {
                                                                        echo "value='" . $registro2["tel_personal"] . "'";
                                                                    }
                                                                    ?> name="telefono" id="telefono"  class="validate[required,minSize[3],maxSize[20],] medium"                                                               	   
                                                                           <?php
                                                                           $sql2 = "SELECT * FROM prf_datopersonales where user_id='$idusuario';";
                                                                           $estado2 = $conn->consultar($sql2);
                                                                           while ($registro2 = mysql_fetch_array($estado2)) {
                                                                               echo "value='" . $registro2["fecha_incorporacion"] . "'";
                                                                           }
                                                                           ?>  />

                                                                </div>

                                                            </div>

                                                            <div class="section">
                                                                <label>Fecha de nacimiento <small></small></label>   
                                                                <div><input type="text" placeholder="aaaa-mm-dd" id="birthday" class=" birthday medium " name="birthday"                                                                     
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM prf_datopersonales where user_id='$idusuario';";
                                                                    $estado2 = $conn->consultar($sql2);
                                                                    while ($registro2 = mysql_fetch_array($estado2)) {
                                                                        echo "value='" . $registro2["fecha_nacimiento"] . "'";
                                                                    }
                                                                    ?>         
                                                                            /></div>
                                                            </div> 

                                                            <div class="section ">
                                                                <label>Sexo<small></small></label>   
                                                                <div> 
                                                                    <!--                                                                    <div>   <?php
                                                                    // echo $DatosP["nombre"];
                                                                    ?>  
                                                                                                                                            <input type="radio" name="genero" id="radio-1" value="Hombre"  class="ck"   <?php ?> checked="checked"/>
                                                                                                                                            <label for="radio-1">Hombre</label>
                                                                                                                                        </div>
                                                                                                                                        <div>
                                                                                                                                            <input type="radio" name="genero" id="radio-2" value="Mujer"  class="ck"  />
                                                                                                                                            <label for="radio-2" >Mujer</label>
                                                                                                                                        </div>-->

                                                                    <select class="small" name="genero">

                                                                        <?php
                                                                        $Genero = $Seani->obtenerGeneroEstado($idusuario);
                                                                        echo "<option  selected='selected'   value='" . $Genero["genero"] . "'>- " . $Genero["genero"] . " </option>";
                                                                        ?>                                                   
                                                                        <option value="Mujer"  >Mujer </option>
                                                                        <option value="Hombre"  >Hombre</option>
                                                                     
                                                                    </select> 


                                                                </div>
                                                            </div>


                                                            <div class="section alluppercase last">
                                                                <label> CURP <small>18 DÍGITOS</small></label>   
                                                                <div> 
                                                                    <input name="curp" type="text"  class=" validate[required,minSize[10],maxSize[18],] large"                 <?php
                                                                    $sql2 = "SELECT * FROM prf_datopersonales where user_id='$idusuario';";
                                                                    $estado2 = $conn->consultar($sql2);
                                                                    while ($registro2 = mysql_fetch_array($estado2)) {
                                                                        echo "value='" . $registro2["curp"] . "'";
                                                                    }
                                                                    ?> >
                                                                </div>
                                                            </div>





                                                         


                                                            <div class="section alluppercase last">
                                                                <label> RFC <small>13 DÍGITOS</small></label>   
                                                                <div> 
                                                                    <input name="rfc" type="text"  class=" validate[required,minSize[10],maxSize[13],] large"                 <?php
                                                                    $sql2 = "SELECT * FROM prf_datopersonales where user_id='$idusuario';";
                                                                    $estado2 = $conn->consultar($sql2);
                                                                    while ($registro2 = mysql_fetch_array($estado2)) {
                                                                        echo "value='" . $registro2["rfc"] . "'";
                                                                    }
                                                                    ?> >
                                                                </div>
                                                            </div>

                                                            <div class="section ">
                                                                <label> No. de Empleado <small></small></label>   
                                                                <div> 
                                                                    <input type="text" class="validate[required,custom[onlyNumberSp]] small" name="noempleado" id="3_required" <?php
                                                                    $sql2 = "SELECT * FROM prf_datopersonales where user_id='$idusuario';";
                                                                    $estado2 = $conn->consultar($sql2);
                                                                    while ($registro2 = mysql_fetch_array($estado2)) {
                                                                        echo "value='" . $registro2["n_empleado"] . "'";
                                                                    }
                                                                    ?>>
                                                                </div>
                                                            </div>


                                                            <div class="section ">
                                                                <label> Dirección<small></small></label>   
                                                                <div> 
                                                                    <input type="text" class="validate[required,minSize[5],maxSize[58],] large" name="calleyNumero" id="4_required"  placeholder="Calle y Numero" <?php
                                                                    $sql2 = "SELECT * FROM prf_datopersonales where user_id='$idusuario';";
                                                                    $estado2 = $conn->consultar($sql2);
                                                                    while ($registro2 = mysql_fetch_array($estado2)) {
                                                                        echo "value='" . $registro2["direcion"] . "'";
                                                                    }
                                                                    ?> >
                                                                </div>

                                                                <label> Localidad<small></small></label>    
                                                                <div> 
                                                                    <input type="text"  class="validate[required,minSize[3],maxSize[58],] large" name="localidad" id="5_required" 

                                                                           <?php
                                                                           $sql2 = "SELECT * FROM prf_datopersonales where user_id='$idusuario';";
                                                                           $estado2 = $conn->consultar($sql2);
                                                                           while ($registro2 = mysql_fetch_array($estado2)) {
                                                                               echo "value='" . $registro2["localidad"] . "'";
                                                                           }
                                                                           ?> >             




                                                                </div>
                                                                <label> Municipio<small></small></label>    
                                                                <div> 
                                                                    <input type="text"  class="validate[required,minSize[3],maxSize[58],] large" name="municipio" id="6_required" 

                                                                           <?php
                                                                           $sql2 = "SELECT * FROM prf_datopersonales where user_id='$idusuario';";
                                                                           $estado2 = $conn->consultar($sql2);
                                                                           while ($registro2 = mysql_fetch_array($estado2)) {
                                                                               echo "value='" . $registro2["municipio"] . "'";
                                                                           }
                                                                           ?> >                        






                                                                </div>
                                                                <label>Entidad Federativa:<small></small></label>   
                                                                <div> 



                                                                    <select name="estado">




                                                                        <?php
                                                                        $entidasFeder = $Seani->obtenerGeneroEstado($idusuario);
                                                                        echo "<option  selected='selected'   value='" . $entidasFeder["estado"] . "'>- " . $entidasFeder["estado"] . " </option>";
                                                                        ?>                                                   

                                                                        <option value="Aguascalientes">Aguascalientes</option>
                                                                        <option value="Baja California">Baja California</option>
                                                                        <option value="Baja California Sur">Baja California Sur</option>
                                                                        <option value="Campeche">Campeche</option>
                                                                        <option value="Chiapas">Chiapas</option>
                                                                        <option value="Chihuahua">Chihuahua</option>
                                                                        <option value="Coahuila">Coahuila</option>
                                                                        <option value="Colima">Colima</option>
                                                                        <option value="Distrito Federal">Distrito Federal</option>
                                                                        <option value="Durango">Durango</option>
                                                                        <option value="Estado de México">Estado de México</option>
                                                                        <option value="Guanajuato">Guanajuato</option>
                                                                        <option value="Guerrero">Guerrero</option>
                                                                        <option value="Hidalgo">Hidalgo</option>
                                                                        <option value="Jalisco">Jalisco</option>
                                                                        <option value="Michoacán">Michoacán</option>
                                                                        <option value="Morelos">Morelos</option>
                                                                        <option value="Nayarit">Nayarit</option>
                                                                        <option value="Nuevo León">Nuevo León</option>
                                                                        <option value="Oaxaca">Oaxaca</option>
                                                                        <option value="Puebla">Puebla</option>
                                                                        <option value="Querétaro">Querétaro</option>
                                                                        <option value="Quintana Roo">Quintana Roo</option>
                                                                        <option value="San Luis Potosí">San Luis Potosí</option>
                                                                        <option value="Sinaloa">Sinaloa</option>
                                                                        <option value="Sonora">Sonora</option>
                                                                        <option value="Tabasco">Tabasco</option>
                                                                        <option value="Tamaulipas">Tamaulipas</option>
                                                                        <option value="Tlaxcala">Tlaxcala</option>
                                                                        <option value="Veracruz">Veracruz</option>
                                                                        <option value="Yucatán">Yucatán</option>
                                                                        <option value="Zacatecas">Zacatecas</option>
                                                                    </select>








                                                                </div>
                                                                <label>CÓDIGO Postal<small></small></label>   
                                                                <div> 
                                                                    <input type="text"  class="validate[required,,minSize[5],maxSize[6],custom[onlyNumberSp]] small" name="codigoPostal" id="8_required" 


                                                                           <?php
                                                                           $sql2 = "SELECT * FROM prf_datopersonales where user_id='$idusuario';";
                                                                           $estado2 = $conn->consultar($sql2);
                                                                           while ($registro2 = mysql_fetch_array($estado2)) {
                                                                               echo "value='" . $registro2["cp"] . "'";
                                                                           }
                                                                           ?>          


                                                                           >
                                                                </div>



                                                            </div>




                                                            <div class="section last">
                                                                <div>
                                                                    <!--                                                      <a class="btn submit_form" >Guardar</a>-->
                                                                    <input class="btn submit_form" type="submit" value="Enviar" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div><!-- row-fluid -->
                                                </form>







                                            </div><!--  end widget-content -->

                                        </div>	
                                    </div><!--/tab1-->

                                    <!--tab2-->
                                    <div id="tab2" class="tab_content"> 
                                        <div class="load_page">

                                            <H5>Instrucción general: Agrega en orden cronológico decreciente, en primer lugar las más recientes y al último la primera que desempeñó.</H5>
 <h5> Busca tu cedula Profesional  <a href="http://www.cedulaprofesional.sep.gob.mx/cedula/indexAvanzada.action">Aquí</a></h5> 

                                            <H4>1.-Agrega tus grados Académicos Obtenidos y estudios de especialización. </h4>

                                            <div id="GradoAcademico" style="width: 800px;"></div>
                                            <script type="text/javascript">

                                                $(document).ready(function() {

                                                    //Prepare jTable
                                                    $('#GradoAcademico').jtable({
                                                        title: 'Grado Academico Obtenidos',
                                                        actions: {
                                                            listAction: 'GradoAcademico.php?action=list',
                                                            createAction: 'GradoAcademico.php?action=create',
                                                            updateAction: 'GradoAcademico.php?action=update',
                                                            deleteAction: 'GradoAcademico.php?action=delete'
                                                        },
                                                        fields: {
                                                            PersonId: {
                                                                key: true,
                                                                create: false,
                                                                edit: false,
                                                                list: false
                                                            },
                                                            gradoA: {
                                                                title: 'Grado Academico',
                                                                width: '40%'
                                                            },
                                                            escuela: {
                                                                title: 'Escuela',
                                                                width: '30%'
                                                            },
                                                            cedula: {
                                                                title: 'Cedula',
                                                                width: '20%'
                                                            },
                                                            Periodo: {
                                                                title: 'Periodo',
                                                                width: '20%',
                                                            }
                                                        }
                                                    });

                                                    //Load person list from server
                                                    $('#GradoAcademico').jtable('load');

                                                });

                                            </script>

                                            <H4>2.-Carrera Académica: Poner las actividades y puestos académicos desempeñados. </h4>

                                            <div id="CarreraAcademica" style="width: 800px;"></div>
                                            <script type="text/javascript">

                                                $(document).ready(function() {

                                                    //Prepare jTable
                                                    $('#CarreraAcademica').jtable({
                                                        title: 'Carrera Académica ',
                                                        actions: {
                                                            listAction: 'CarreraAcademica.php?action=list',
                                                            createAction: 'CarreraAcademica.php?action=create',
                                                            updateAction: 'CarreraAcademica.php?action=update',
                                                            deleteAction: 'CarreraAcademica.php?action=delete'


                                                        },
                                                        fields: {
                                                            id: {
                                                                key: true,
                                                                create: false,
                                                                edit: false,
                                                                list: false
                                                            },
                                                            actividad: {
                                                                title: 'Actividad o Puesto',
                                                                width: '40%'
                                                            },
                                                            institucion: {
                                                                title: 'Institución',
                                                                width: '40%'
                                                            },
                                                            periodo: {
                                                                title: 'Periodo',
                                                                width: '20%',
                                                            }
                                                        }
                                                    });

                                                    //Load person list from server
                                                    $('#CarreraAcademica').jtable('load');

                                                });

                                            </script>

                                            <div id="CarreraAcademica2" style="width: 800px;"></div>
                                            <script type="text/javascript">

                                                $(document).ready(function() {

                                                    //Prepare jTable
                                                    $('#CarreraAcademica2').jtable({
                                                        title: 'Materias Impartidas',
                                                        actions: {
                                                            listAction: 'CarreraAcademica2.php?action=list',
                                                            createAction: 'CarreraAcademica2.php?action=create',
                                                            updateAction: 'CarreraAcademica2.php?action=update',
                                                            deleteAction: 'CarreraAcademica2.php?action=delete'


                                                        },
                                                        fields: {
                                                            id: {
                                                                key: true,
                                                                create: false,
                                                                edit: false,
                                                                list: false
                                                            },
                                                            nombre: {
                                                                title: 'Materias Impartidas',
                                                                width: '30%'
                                                            },
                                                            semestre_equivalente: {
                                                                title: 'Semestre o equivalente',
                                                                width: '30%'
                                                            },
                                                            no_veces: {
                                                                title: 'No. de Veces',
                                                                width: '20%'
                                                            },
                                                            periodo: {
                                                                title: 'Periodo',
                                                                width: '15%',
                                                            }
                                                        }
                                                    });

                                                    //Load person list from server
                                                    $('#CarreraAcademica2').jtable('load');

                                                });

                                            </script>
                                            <h4>3.-Actividad profesional no docente.</h4>
                                            <div id="CarreraAcademica3" style="width: 800px;"></div>
                                            <script type="text/javascript">

                                                $(document).ready(function() {

                                                    //Prepare jTable
                                                    $('#CarreraAcademica3').jtable({
                                                        title: 'Actividad profesional no docente',
                                                        actions: {
                                                            listAction: 'CarreraAcademica3.php?action=list',
                                                            createAction: 'CarreraAcademica3.php?action=create',
                                                            updateAction: 'CarreraAcademica3.php?action=update',
                                                            deleteAction: 'CarreraAcademica3.php?action=delete'


                                                        },
                                                        fields: {
                                                            id: {
                                                                key: true,
                                                                create: false,
                                                                edit: false,
                                                                list: false
                                                            },
                                                            puesto: {
                                                                title: 'Actividad o Puesto',
                                                                width: '30%'
                                                            },
                                                            empresa: {
                                                                title: 'Organización o Empresa',
                                                                width: '30%'
                                                            },
                                                            periodo: {
                                                                title: 'Periodo',
                                                                width: '15%',
                                                            }
                                                        }
                                                    });

                                                    //Load person list from server
                                                    $('#CarreraAcademica3').jtable('load');

                                                });

                                            </script>
                                            <h4>4.- Asociaciones y/o Premios (Premios Nacionales, Estatales, SNI y Otros).</h4>
                                            <div id="CarreraAcademica4" style="width: 800px;"></div>
                                            <script type="text/javascript">

                                                $(document).ready(function() {

                                                    //Prepare jTable
                                                    $('#CarreraAcademica4').jtable({
                                                        title: 'Pertenencia a Asociaciones Profesionales',
                                                        actions: {
                                                            listAction: 'CarreraAcademica4.php?action=list',
                                                            createAction: 'CarreraAcademica4.php?action=create',
                                                            updateAction: 'CarreraAcademica4.php?action=update',
                                                            deleteAction: 'CarreraAcademica4.php?action=delete'


                                                        },
                                                        fields: {
                                                            id: {
                                                                key: true,
                                                                create: false,
                                                                edit: false,
                                                                list: false
                                                            },
                                                            nombre: {
                                                                title: 'Nombre de la Asociación y/o Premio',
                                                                width: '30%'
                                                            },
                                                            tipo: {
                                                                title: 'Tipo de Membresía',
                                                                width: '30%'
                                                            },
                                                            periodo: {
                                                                title: 'Periodo',
                                                                width: '15%',
                                                            }
                                                        }
                                                    });

                                                    //Load person list from server
                                                    $('#CarreraAcademica4').jtable('load');

                                                });

                                            </script>


                                        </div>	


                                    </div><!--/tab2-->


                                    <!--tab3-->
                                    <div id="tab3" class="tab_content"> 
                                        <div class="load_page">







                                            <div class="section last">
                                            </div>	
                                            <form id="demoform" action="InsertMatrizCompetencias.php" method="post"> 

  
 
   <TABLE BORDER=0>
<TD WIDTH=300>
<h3>Ingeniería en Tecnotrónica</h3> 
</TD>

<TD WIDTH=150>
 <button type="submit" class="btn btn-default btn-block" style="margin-top:0px">Guardar Matriz</button>
</TD>
</TABLE>
   <h5>Instrucciones generales: Selecciona las asignaturas en la cual eres competente para impartir.</h5> 
                                                <input type="hidden"  value="<?php echo $idusuario ?>" name="id" id="id"  class="validate[required,minSize[3],maxSize[50],] medium"  />
                                               <h3><u>TSU</u></h3>
                                                <table style="width:300px">
                                                    <tr>
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">1o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='MAUU' and semestre=1 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];




//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 1);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>

                                                        <!--// 2 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">2o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='MAUU' and semestre=2 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 2);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 3 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">3o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='MAUU' and semestre=3 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 3);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 4 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">4o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='MAUU' and semestre=4 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 4);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 5 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">5o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='MAUU' and semestre=5 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


//                                                                                      //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 5);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->           


                                                  


                                                    </tr> 

                                                </table>  
                                                                         <h3><u>INGENIERÍA</u></h3>

  <table style="width:300px">
                                                    <tr>              

      <!--// 7 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">7o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='ITEC' and semestre=7 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 7);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   

                                                        <!--// 8 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">8o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='ITEC' and semestre=8 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {

                                                                        +
                                                                                //$idusuario = $DatosP["id"];
                                                                                $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 8);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   

                                                        <!--// 9 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">9o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='ITEC' and semestre=9 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 9);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   


                                                        <!--// 10 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">10o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='ITEC' and semestre=10 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 10);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   






													</tr> 

     </table>  
                                             
                                            </form>    
                                        </div><!--/tab3-->

                                    </div>

                                    <!--tab4-->
                                    <div id="tab4" class="tab_content"> 
                                        <div class="load_page">

                                            <form id="demoform" action="InsertMatrizCompetencias.php" method="post"> 

                                                  <TABLE BORDER=0>
<TD WIDTH=400>
<h3>Ingeniería en Tecnologías de la Información</h3> 
</TD>

<TD WIDTH=150>
 <button type="submit" class="btn btn-default btn-block" style="margin-top:0px">Guardar Matriz</button>
</TD>
</TABLE>
   
       <h5>Instrucciones generales: Selecciona las asignaturas en la cual eres competente para impartir.</h5>                                          
                                                
												<input type="hidden"  value="<?php echo $idusuario ?>" name="id" id="id"  class="validate[required,minSize[3],maxSize[50],] medium"  />
                                                <table style="width:300px">
                                                    <tr>
                                                        <td><section class="tasks">
                                                                                                                                                       
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">1o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='TICMCE' and semestre=1 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 1);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . " 'target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>

                                                        <!--// 2 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">2o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='TICMCE' and semestre=2 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 2);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 3 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">3o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='TICMCE' and semestre=3 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 3);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 4 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">4o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='TICMCE' and semestre=4 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 4);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . " 'target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 5 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">5o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='TICMCE' and semestre=5 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 5);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . " 'target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->           
	
<table style="width:300px">
                                                    <tr> 

<!--// 7 semestre-->
														
														
														
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">7o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='ITI' and semestre=7 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 7);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   

                                                        <!--// 8 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">8o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='ITI' and semestre=8 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {

                                                                        +
                                                                                //$idusuario = $DatosP["id"];
                                                                                $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 8);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   

                                                        <!--// 9 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">9o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='ITI' and semestre=9 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 9);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   
                                                        <!--// 10 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">10o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='ITI' and semestre=10 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 10);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                <!--finaliza semestre -->   

                          </tr> 
                     </table>


                                               
                                            </form>

                                        </div>	


                                    </div><!--/tab4-->

                                    <!--tab5-->
                                    <div id="tab5" class="tab_content"> 
                                        <div class="load_page">
<TABLE border=0>
<TD WIDTH=500>
<h3>Ingeniería en Negocios
y Gestión Empresarial</h3> 
</TD>

<TD WIDTH=150>

</TD>
</TABLE>
                                             <h5>Instrucciones generales: Selecciona las asignaturas en la cual eres competente para impartir.</h5>    
                                            <form id="demoform" action="InsertMatrizCompetencias.php" method="post"> 

                                                <input type="hidden"  value="<?php echo $idusuario ?>" name="id" id="id"  class="validate[required,minSize[3],maxSize[50],] medium"  />

 <button type="submit" class="btn btn-default btn-block" style="margin-top:0px">Guardar Matriz</button>
                                                <table style="width:300px">
                                                    <tr>
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">1o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='DNAM' and semestre=1 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 1);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>

                                                        <!--// 2 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">2o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='DNAM' and semestre=2 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 2);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 3 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">3o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='DNAM' and semestre=3 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 3);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 4 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">4o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='DNAM' and semestre=4 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 4);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 5 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">5o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='DNAM' and semestre=5 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 5);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->           

<table style="width:300px">
                                                    <tr> 
														
														
<!--// 7 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">7o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='INGEM' and semestre=7 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 7);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   

                                                        <!--// 8 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">8o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='INGEM' and semestre=8 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {

                                                                        +
                                                                                //$idusuario = $DatosP["id"];
                                                                                $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 8);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   

                                                        <!--// 9 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">9o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='INGEM' and semestre=9 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 9);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   

                                                        <!--// 10 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">10o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='INGEM' and semestre=10 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 10);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                     <!--finaliza semestre -->   

                             </tr> 

                          </table>  
                                             
                                            </form>
                                        </div>	


                                    </div><!--/tab5-->





                                    <!--tab6-->
                                    <div id="tab6" class="tab_content"> 
                                        <div class="load_page">
                                            <form id="demoform" action="InsertMatrizCompetencias.php" method="post"> 

                                                <TABLE border=0>
<TD WIDTH=400>
<h3>Ingeniería en Mantenimiento
Industrial
</h3> 
</TD>

<TD WIDTH=150>
 <button type="submit" class="btn btn-default btn-block" style="margin-top:0px">Guardar Matriz</button>
</TD>
</TABLE>
    <h5>Instrucciones generales: Selecciona las asignaturas en la cual eres competente para impartir.</h5>                                                 
                                                <input type="hidden"  value="<?php echo $idusuario ?>" name="id" id="id"  class="validate[required,minSize[3],maxSize[50],] medium"  />

                                                <table style="width:300px">
                                                    <tr>
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">1o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='MAI' and semestre=1 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 1);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>

                                                        <!--// 2 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">2o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='MAI' and semestre=2 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 2);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 3 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">3o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='MAI' and semestre=3 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 3);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 4 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">4o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='MAI' and semestre=4 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 4);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 5 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">5o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='MAI' and semestre=5 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 5);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->           


    <table style="width:300px">
                                                    <tr> 
	<!--// 7 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">7o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='IMI' and semestre=7 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 7);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   

                                                        <!--// 8 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">8o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='IMI' and semestre=8 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {

                                                                        +
                                                                                //$idusuario = $DatosP["id"];
                                                                                $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 8);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   

                                                        <!--// 9 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">9o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='IMI' and semestre=9 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 9);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   

                                                        <!--// 10 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">10o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='IMI' and semestre=10 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 10);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   

                                                    </tr> 

                                                </table>  
                                               
                                            </form>                                   

                                        </div>	


                                    </div><!--/tab6-->


                                    <!--tab7-->
                                    <div id="tab7" class="tab_content"> 
                                        <div class="load_page">
                                            <form id="demoform" action="InsertMatrizCompetencias.php" method="post"> 
<TABLE border=0>
<TD WIDTH=500>
<h3>Ingeniería en Procesos y
Operaciones Industriales</h3> 
</TD>

<TD WIDTH=150>
 <button type="submit" class="btn btn-default btn-block" style="margin-top:0px">Guardar Matriz</button>
</TD>
</TABLE>
                                                 <h5>Instrucciones generales: Selecciona las asignaturas en la cual eres competente para impartir.</h5>    
                                                <input type="hidden"  value="<?php echo $idusuario ?>" name="id" id="id"  class="validate[required,minSize[3],maxSize[50],] medium"  />


                                                <table style="width:300px">
                                                    <tr>
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">1o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='PIAA' and semestre=1 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 1);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>

                                                        <!--// 2 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">2o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='PIAA' and semestre=2 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 2);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 3 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">3o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='PIAA' and semestre=3 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 3);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 4 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">4o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='PIAA' and semestre=4 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 4);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 5 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">5o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='PIAA' and semestre=5 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 5);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->           

<table style="width:300px">
                                                    <tr> 
   <!--// 7 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">7o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='IPOI' and semestre=7 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 7);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   

                                                        <!--// 8 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">8o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='IPOI' and semestre=8 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {

                                                                        +
                                                                                //$idusuario = $DatosP["id"];
                                                                                $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 8);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   

                                                        <!--// 9 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">9o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='IPOI' and semestre=9 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 9);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   

                                                        <!--// 10 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">10o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='IPOI' and semestre=10 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 10);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   

                                                    </tr> 

                                                </table>  
                                             
                                            </form>                                  

                                        </div>	


                                    </div><!--/tab7-->


                                    <!--tab8-->
                                    <div id="tab8" class="tab_content"> 
                                        <div class="load_page">

                                            <form id="demoform" action="InsertMatrizCompetencias.php" method="post"> 
<TABLE border=0>
<TD WIDTH=400>
<h3>Ingeniería en Diseño Textil
y Moda</h3> 
</TD>

<TD WIDTH=150>
 <button type="submit" class="btn btn-default btn-block" style="margin-top:0px">Guardar Matriz</button>
</TD>
</TABLE>
                                                 <h5>Instrucciones generales: Selecciona las asignaturas en la cual eres competente para impartir.</h5>    
                                                <input type="hidden"  value="<?php echo $idusuario ?>" name="id" id="id"  class="validate[required,minSize[3],maxSize[50],] medium"  />


                                                <table style="width:300px">
                                                    <tr>
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">1o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='DMIAP' and semestre=1 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 1);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>

                                                        <!--// 2 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">2o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='DMIAP' and semestre=2 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 2);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 3 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">3o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='DMIAP' and semestre=3 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 3);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 4 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">4o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='DMIAP' and semestre=4 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 4);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 5 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">5o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='DMIAP' and semestre=5 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 5);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->           



<table style="width:300px">
                                                    <tr> 
<!--// 7 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">7o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='IDTM' and semestre=7 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 7);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   

                                                        <!--// 8 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">8o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='IDTM' and semestre=8 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {

                                                                        +
                                                                                //$idusuario = $DatosP["id"];
                                                                                $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 8);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   

                                                        <!--// 9 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">9o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='IDTM' and semestre=9 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 9);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->   

                                                        <!--// 9 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">10o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='IDTM' and semestre=10 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 10);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->  

                                                    </tr> 

                                                </table> 
                                              
                                            </form>                                  

                                        </div>	


                                    </div><!--/tab8-->



                                    <!--                                                 tab9-->
                                    <div id="tab9" class="tab_content"> 
                                        <div class="load_page">

                                            <form id="demoform" action="InsertMatrizCompetencias.php" method="post"> 
<TABLE border=0>
<TD WIDTH=400>
<h3>T.S.U. en Procesos Industriales
Área Manufactura</h3> 
</TD>

<TD WIDTH=150>
 <button type="submit" class="btn btn-default btn-block" style="margin-top:0px">Guardar Matriz</button>
</TD>
</TABLE>
                                                 <h5>Instrucciones generales: Selecciona las asignaturas en la cual eres competente para impartir.</h5>    
                                                
                                                <input type="hidden"  value="<?php echo $idusuario ?>" name="id" id="id"  class="validate[required,minSize[3],maxSize[50],] medium"  />


                                                <table style="width:300px">
                                                    <tr>
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">1o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='PIAM' and semestre=1 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 1);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>

                                                        <!--// 2 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">2o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='PIAM' and semestre=2 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 2);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 3 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">3o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='PIAM' and semestre=3 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 3);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 4 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">4o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='PIAM' and semestre=4 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 4);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 5 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">5o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='PIAM' and semestre=5 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 5);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->           



                                                    </tr> 

                                                </table>  
                                               
                                            </form>                                  


                                        </div>	


                                    </div>
                                    <!--/tab99-->

                                    <div id="tab10" class="tab_content"> 
                                        <div class="load_page">
              <form id="demoform" action="InsertMatrizCompetencias.php" method="post"> 
<TABLE border=0>
<TD WIDTH=400>
<h3>T.S.U. en Procesos Industriales
Área Plásticos</h3> 
</TD>

<TD WIDTH=150>
 <button type="submit" class="btn btn-default btn-block" style="margin-top:0px">Guardar Matriz</button>
</TD>
</TABLE>
                   <h5>Instrucciones generales: Selecciona las asignaturas en la cual eres competente para impartir.</h5>   
                 
                                                
                                                <input type="hidden"  value="<?php echo $idusuario ?>" name="id" id="id"  class="validate[required,minSize[3],maxSize[50],] medium"  />


                                                <table style="width:300px">
                                                    <tr>
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">1o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='PIAP' and semestre=1 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 1);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>

                                                        <!--// 2 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">2o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='PIAP' and semestre=2 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 2);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 3 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">3o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='PIAP' and semestre=3 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 3);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 4 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">4o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='PIAP' and semestre=4 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 4);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->

                                                        <!--// 5 semestre-->
                                                        <td><section class="tasks">
                                                                <header class="tasks-header">
                                                                    <h2 class="tasks-title">5o.</h2>
                                                                    <a href="#" class="tasks-lists">Lists</a>
                                                                </header>

                                                                <fieldset class="tasks-list">
                                                                    <?php
                                                                    $sql2 = "SELECT * FROM plan_estudios where Carrera='PIAP' and semestre=5 ;";
                                                                    $estado2 = $conn->consultar($sql2);


                                                                    while ($registro2 = mysql_fetch_array($estado2)) {


                                                                        //$idusuario = $DatosP["id"];
                                                                        $registro2["id"] = $registro2["id"];


//                                                                     echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"]);
//                                                          
                                                                        echo "<label class='tasks-list-item'>";
                                                                        echo "<input type='checkbox' name='ITEC[]' value='" . $registro2["id"] . "' class='tasks-list-cb' ";
                                                                        echo $estatusMateria = $Seani->obteneEstatusMateria($idusuario, $registro2["id"], 5);
                                                                        echo ">";
                                                                        echo "<span class='tasks-list-mark'></span>";
                                                                        echo " <span class='tasks-list-desc'>" . $registro2["nombre_materia"] . "</span> <br>    <A HREF='" . $registro2["documento_url"] . "' target='_blank' title='" . $registro2["nombre_materia"] . "'>";

                                                                        echo "Hoja de Asignatura</A>";
                                                                        echo "</label>";
                                                                    }
                                                                    ?>        
                                                                </fieldset>


                                                            </section></td>  
                                                        <!--finaliza semestre -->           



                                                    </tr> 

                                                </table>  
                                               
                                            </form>                

                                        </div>	


                                    </div>

                                </div>
                            </div><!-- end uitab-->

                        </div>
                    </div><!-- end uitab-->

                </div><!--  end widget-content -->
            </div><!-- widget  span12 clearfix-->
            <div id="footer"> &copy; Copyright 2014  All Rights Reserved <span class="tip"><a  href="http://www.uttlaxcala.edu.mx/" title="UTT" >Universidad Tecnológica de Tlaxcala</a></span> </div>

        </div><!-- row-fluid -->

        <!-- /tabss -->







    </div> <!--// End inner -->
</div> <!--// End content --> 

</body>
</html>