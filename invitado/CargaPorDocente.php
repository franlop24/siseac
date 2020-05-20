<?php
session_start();
if (!$_SESSION["account_name"]) {

//    header('Location: ../index.php');
        echo '<script type="text/javascript">';
    echo 'alert("No has iniciado sesión' . $error . '");';
    echo 'window.location.assign("../index.php");';
    echo '</script>';
    
} else if ($_SESSION["tipo_usuario"] != 3) {
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
ini_set('session.bug_compat_42',"0");
ini_set('session.bug_compat_warn',"0");

?>
<!DOCTYPE html>
<html lang="es">
  <head>
        <meta charset="utf-8">
        <title>SISEAC.-Dashboard</title>
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

		<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery("#demovalidation").validationEngine({
					prettySelect : true,
					useSuffix: "_chzn",
				});
				$("#country").chosen({
					allow_single_deselect : true
				});

			  // Example Overlay form
			  $(".on_load").live('click',function(){	
				  $('body').append('<div id="overlay"></div>');
				  $('#overlay').css('opacity',0.4).fadeIn(400);
				  var activeLoad = $(this).attr("name");		
				  var titleTabs = $(this).attr("title");		
				  $("ul.tabs li").hide();		
						  $('ul.tabs li').each(function(index) {
								  var activeTab = $('ul.tabs li:eq('+index+')').find("a").attr("href")			
								  if(activeTab==activeLoad){
									  $("ul.tabs ").append('<li class=active><a href="'+activeLoad+'" class=" prev on_prev "  id="on_prev_pro" name="'+activeLoad+'" >'+titleTabs+'</a></li>');
									  $("ul.tabs li:last").fadeIn();	
									  }
						  });
				  $('.widget-content').css({'position':'relative','z-index':'1001'});
				  $(".load_page").hide();
				  $('.show_add').show();
			   });
			  $(".on_prev").live('click',function(){	 
					$("ul.tabs li:last").remove();					 
					$("ul.tabs li").fadeIn();
					var pageLoad = $(this).attr("rel");	
					var activeLoad = $(this).attr("name");		
					  $(".show_add, .show_edit").hide();		
					  $(".show_edit").html('').hide();		
						  $(activeLoad).fadeIn();	
								  $(' .load_page').fadeIn(400,function(){   
										 $('#overlay').fadeOut(function(){
												   $('.widget-content').delay(500).css({'z-index':'','box-shadow':'','-moz-box-shadow':'','-webkit-box-shadow':''});
										  }); 
							  }); 
					ResetForm();
				   });	
			});
		</script>
                
        
		</head>        
        <body>        
        
            <!-- Header -->
            <?php include_once('include/header.php'); ?>
           <!-- End Header -->
            
              <!-- left_menu -->
           
              
              
           <div id="left_menu">
                    <ul id="main_menu" class="main_menu">
<!--                      <li class="select" ><a href="#"style="color: #292929;" ><b>Dashboard</b></a></li>-->
                    <li   ><a href="index.php" > Dashboard </a></li>
                       <li   ><a href="AdminDocentes.php" > Administrar Docentes </a></li>
                        <li   ><a href="Cargahoraria.php" > Concentrado </a></li>
                        <li   ><a href="CarrerasCargaHoraria.php" > Administrar Carga Horaria </a></li>
                        <li class="select"  ><a style="color: #292929;"href="CargaPorDocente.php" > Carga Individual </a></li>
    
                     
                    </ul>
               </div>
               
              <div id="content" >
                <div class="inner">
                                    
                   <!-- menu -->
               <?php include_once('include/menu.php'); ?>
                    
                    <div class="row-fluid">
                      <form id="demovalidation" action='GuardarCargaIndividual.php' method='post' > 
                            
                    <?php
  echo ' <div class="section">';
                    echo '<label>Seleciona un Docente<small>Asignar</small></label> ';
                       echo '    <div>';
         $Docentes=$Seani->SelecionarTodosDocentes3();
         $tipo=2;
                 echo '       </div>  ';
           echo '    </div>  ';
           echo '  <div class="section">';
               echo '             <label>Elige Concepto<small>Carga Horaria</small></label> ';
                             echo '    <div>';
                  $Docentes=$Seani->SelecionarConceptoCargaHoraria($tipo);
         $materia=$_GET['materia'];
                 echo '       </div>  ';
         echo '       </div>  ';
         $Carreras = $Seani->TodaslasCarreraSelect(); 
                  echo" <input type='hidden' value='$materia' name='materia' />";
        ?>
               
                                  <div class="section">
                                              <label> Numero <small>Horas Asignar</small></label>   
                                              <div> 
                                             <input type="text" class="validate[required] small" name="nhoras" id="f_required">
                                              </div>
                                             </div>
                          
                           <div class="section">
                                                 <label> Descripción <small>Introducción,	
	Justificación,	
	Objetivos,	
	Descripción ,
	Cronogramas de Actividades,
        Entregables.
 </small></label>   
                                                <div > <textarea name="descripcion" id="Textareaelastic"  class="large"  cols="" rows=""></textarea></div>   
                                                
                                             </div>
                                  
          <input class="btn submit_form"   type="submit" value="Guardar Carga Horaria" />  
    </form>
                                                        
                                           
                                      <div class="clearfix"></div>
                  
                           
                           
                         

                            
                    </div><!-- row-fluid -->
                    <div class="row-fluid">
                    <div id="footer">&copy; Copyright 2014  All Rights Reserved <span class="tip"><a  href="http://www.uttlaxcala.edu.mx/" title="UTT" >Universidad Tecnológica de Tlaxcala</a> </span> </div>
                    
                </div> <!--// End inner -->
              </div> <!--// End ID content --> 

        
        </body>
        </html>