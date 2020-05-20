	
<div id="header">
    <?php
     $username=$_SESSION["account_name"]; 
        include('../mvc/modelo.php');
        $Seani = new Seani();	
         $idusuario=$Seani->obteneIdusuario($username);
         $foto=$Seani->obteneFotousuario( $idusuario);
              ?>
                <ul id="account_info" class="pull-right"> 
                    <li><img src=<?php echo"'"; echo $foto;echo"'"; ?> alt="Online" width='45' height='45' /></li>
                    <li class="setting">
                        Bienvenido, <b><?php echo $_SESSION["account_name"] ?></b>
                        <ul class="subnav">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#" alt="Proximamente">Perfil</a></li>
                            <li><a href="#">Configuraciones</a></li>
                            <li><a href="#">Reset password</a></li>
                            <br class="clearfix"/>
                        </ul>
                    </li>
                    <li  title="Disconnect"><a href="../salir.php">Salir</a></li> 
                </ul>
            </div>