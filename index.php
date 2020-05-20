<?php
session_start();
  

if(isset($_SESSION['account_name']) && $_SESSION["tipo_usuario"]==2){
    header('Location: directorc/AdminDirectorC.php');

}else if(isset($_SESSION['account_name']) && $_SESSION["tipo_usuario"]==1){
    header('Location: profesor/profile.php'); 
 }else if(isset($_SESSION['account_name']) && $_SESSION["tipo_usuario"]==3){
    header('Location: admin/index.php'); 
 }else if(isset($_SESSION['account_name']) && $_SESSION["tipo_usuario"]==4){
    header('Location: rector/index.php'); 
 }


 ?>

<?php session_start();
// connect  server 
include ('config/config.php');

if(isset($_POST["username"]) and isset($_POST["password"])){
sleep(1);
$pass_login=$_POST["password"];
 // $pass_login=md5($_POST["password"]);  if use md5 encode 
$result=q("SELECT * FROM " .$prefix_table."user  where  username='".$_POST["username"]."' and password='".$pass_login."' ");

	  if(mysql_num_rows($result)==0){ 
			$return_arr["status"]=0;		
			echo json_encode($return_arr); // return value 
	  }else{
	  $row=mysql_fetch_assoc($result);
			if($_POST["remember"]){ //  if remeber checked
					$cookieTime=time()+3600*24*356;	 //  cookie  time
					setcookie("account_name",$row[username],$cookieTime); 
					// create cookie  ("your cookie name", parameter , cookie time )
					//falta esta sesion para recordar
			}else{ 
					$_SESSION["account_name"]=$row[username];	// create SESSION  
						$_SESSION["tipo_usuario"]=$row[tipo_usuario];	// create SESSION  
                $_SESSION["email"]=$row[email]; // create SESSION  
				  $_SESSION["estatus"]=$row[estatus];
				   $_SESSION["foto"]=$row[foto];
			}
			$return_arr["status"]=1;		 
			echo json_encode($return_arr); // return value 
}  //end else
exit();
}
?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48987076-1', 'uttlaxcala.edu.mx');
  ga('send', 'pageview');

</script>

<html lang="es">
  <head>
        <meta charset="utf-8">
        <title>SISEAC V.0.1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link type="text/css" rel="stylesheet" href="components/bootstrap/bootstrap.css" />
        <link type="text/css" rel="stylesheet" href="css/zice.style.css"/>
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

        <style type="text/css">
        html {
            background-image: none;
        }
		body{
			background-position:0 0;
		
			}
        label.iPhoneCheckLabelOn span {
            padding-left:0px
        }
        #versionBar {
            background-color:#168011;
            position:fixed;
            width:100%;
            height:35px;
            bottom:0;
            left:0;
            text-align:center;
            line-height:35px;
            z-index:11;
            -webkit-box-shadow: black 0px 10px 10px -10px inset;
            -moz-box-shadow: black 0px 10px 10px -10px inset;
            box-shadow: black 0px 10px 10px -10px inset;
        }
        .copyright{
            text-align:center; font-size:10px; color:#CCC;
        }
        .copyright a{
            color:#CCC; text-decoration:none
        }    
        </style>
		
	
 
<script type="text/javascript">
      jQuery(document).ready(function() {
        jQuery("#createaccPage").validationEngine({
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
        <body >
            <script>
  if (navigator.appName=="Microsoft Internet Explorer") {
   document.write("<div id='pariex'><center><h6>Está utilizando Internet Explore. Para el uso correcto de este sistema te recomendamos usar <a  href='http://www.ez-download.com/mozilla-firefox/?kw=firefox&subid=EZFFMX&cust=firefox&type=firefox&gclid=CMGjmOnuxroCFStp7AodlD0AvQ&utm_campaign=EZFFMX&fwd=1' title='UTT' >Firefox</a> , <a  href='https://www.google.com/intl/es/chrome/browser/?hl=es' title='UTT' >Chrome</a> ,Opera o Safari.</h6></center></div>")
  }
</script>
         
        <div id="successLogin"></div>
        <div class="text_success"><img src="images/loadder/loader_green.gif"  alt="ziceAdmin" /><span>Cargando...</span></div>
        
        <div id="login" >
          <div class="ribbon"></div>
          <div class="inner clearfix">
          <div class="logo" ><img src="images/logo/logo_login.png" alt="ziceAdmin" /></div>
          <div class="formLogin">
         <form name="formLogin"  id="formLogin" method="post">
      
                <div class="tip">
                      <input name="username" type="text"  id="username_id"  title="Usuario"   />
                </div>
                <div class="tip">
                      <input name="password" type="password" id="password"   title="Contrase&ntilde;a"  />
                </div>
      
                <div class="loginButton">
<!--                  <div style="float:left; margin-left:-9px;">
                      <input type="checkbox" id="on_off" name="remember" class="on_off_checkbox"  value="1"  />
                      <span class="f_help">Recordar</span>
                  </div>-->
                  <div class=" pull-right" style="margin-right:-8px;">
                      <div class="btn-group">
                        <button type="button" class="btn" id="but_login">Iniciar</button>
<!--                        <button type="button" class="btn" id="forgetpass">Olvidaste?</button>-->
                      </div>
                      <span class=""><p><a href="#" id="createacc">Aún no estas registrado, haz clic aquí.</a></p></span>
					                        <span class=""><p><a href="#" id="createacc2">Recuperar Contranas?.</a></p></span>
                  </div>
                  <div class="clear"></div>
                </div>
      
          </form>
          <form id="createaccPage" method="post" action="insert/registro.php" >
                             <form > 
                                                  <div class="tip">
                                 <input type="text" class="validate[required,custom[email]]  medium" name="email" id="e_required" placeholder="Email">
                </div>
                      <div class="tip">
                      <input type="text"  name="user" id="user"  class="validate[required,minSize[4],maxSize[20],] medium"  placeholder="Usuario"  />      
                </div>
                <div class="tip">
                    <input type="password"  class="validate[required,minSize[6]] medium"  name="pass" id="pass" placeholder="Contrase&ntilde;a" />
                </div>
                      
                <div class="tip">
                     <input type="text"  name="nombreA" id="nombreA"  class="validate[required,minSize[3],maxSize[20],] medium"  placeholder="Nombre"  />
                </div>
                <div class="tip">
                     <input type="text"  name="apellidoap" id="apellidoap"  class="validate[required,minSize[3],maxSize[20],] medium"  placeholder="Apellido Paterno"  />
                </div>
           <div class="tip">
                     <input type="text"  name="apellidoma" id="apellidoma"  class="validate[required,minSize[3],maxSize[20],] medium"  placeholder="Apellido Materno"  />
                </div>
             
               
        
                <div class="loginButton" align="center">
                        <button type="button" class="btn" id="backLogin"><i class="icon-caret-left"></i> atras </button>
                        <button type="button" class="btn btn-danger white " onClick="$('#createaccPage').submit();"><i class="icon-unlock"></i> Registrar </button>
                </div>
                                      
                                        </form>
          </form>
		  
		     <form id="createaccPage2" method="post" action="insert/registro.php" >
                             <form > 
                                                  <div class="tip">
                                 <input type="text" class="validate[required,custom[email]]  medium" name="email" id="e_required" placeholder="Email">
                </div>
                      <div class="tip">
                      <input type="text"  name="user" id="user"  class="validate[required,minSize[4],maxSize[20],] medium"  placeholder="Usuario"  />      
                </div>
               
             
               
        
                <div class="loginButton" align="center">
                        <button type="button" class="btn" id="backLogin2"><i class="icon-caret-left"></i> atras </button>
                        <button type="button" class="btn btn-danger white " onClick="$('#createaccPage2').submit();"><i class="icon-unlock"></i> Registrar </button>
                </div>
                                      
                                        </form>
          </form>
		  
		  

          </div>
        </div>
          <div class="shadow"></div>
        </div>
        
        <!--Login div-->
        <div class="clear"></div>
        <div id="versionBar" >
          <div class="copyright" >  &copy; Copyright 2014  All Rights Reserved <span class="tip"><a  href="http://www.uttlaxcala.edu.mx/" title="UTT" >Universidad Tecnológica de Tlaxcala</a> </span> </div>
          <!-- // copyright-->
        </div>
        
        <!-- Link JScript-->

        <script type="text/javascript" src="js/login_php.js"></script>
		<script type="text/javascript" >
        $(document).ready(function () {	 
                $('#createacc').click(function(e){
                    $('#login').animate({   height: 250, 'margin-top': '-200px' }, 300);	
                    $('.formLogin').animate({   height: 250 }, 300);
                    $('#createaccPage').fadeIn();
                    $('#formLogin').hide();
                });
                $('#backLogin').click(function(e){
                    $('#login').animate({   height: 254, 'margin-top': '-148px' }, 300);	
                    $('.formLogin').animate({   height: 150 }, 300);
                    $('#formLogin').fadeIn();
                    $('#createaccPage').hide();
                });		

   $('#createacc2').click(function(e){
                    $('#login').animate({   height: 250, 'margin-top': '-400px' }, 300);	
                    $('.formLogin').animate({   height: 340 }, 300);
                    $('#createaccPage2').fadeIn();
                    $('#formLogin').hide();
                });
                $('#backLogin2').click(function(e){
                    $('#login').animate({   height: 254, 'margin-top': '-148px' }, 300);	
                    $('.formLogin').animate({   height: 150 }, 300);
                    $('#formLogin').fadeIn();
                    $('#createaccPage2').hide();
                });	



				
        });		
        </script>
        </body>
        </html>