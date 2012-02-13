<?= doctype('html4-strict')?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
                <link rel='shortcut icon' href='<?php echo base_url()?>/imagenes/icons/favicon.ico' />
		<title>Direccion de Proyectos del Edo. Aragua</title>
                <!-- Js para el Style del login -->
                <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>/css/login/tripoli.css" />
                <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>/css/login/login.css" />
                <!-- Js para levantar la ayuda, o tooltip-->
                <script type="text/javascript"  src='<?php echo base_url()?>/js/jquery.js'></script>
                <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>/js/tooltip/global.css" />
                <script type="text/javascript"  src='<?php echo base_url()?>/js/tooltip/jtip.js'></script>
	</head>
	<body>
        	<div id="cuerpo">
  
                      <div id="bd-login-form" class="" style="margin-top: -175px; zoom: 1; ">
                              <form id="login-form" class="login-form" method="post" action="<?php echo site_url('login'); ?>" autocomplete="off">
                                    <ul>
                                      <li>
                                        <label for="username">Usuario</label>
                                        <input name="usuario" type="text"  title="Esriba su nombre de usuario." id="signin_username" />
                                      </li>
                                      <li>
                                        <label for="password">Contrase&ntilde;a</label>
                                        <input type="password"  name="clave"   title="Esriba su clave personal." id="signin_password"/>
                                      </li>
                                      <li class="buttons">
                                            <a href="<?php echo base_url()?>/help/login/sugerencias_y_recomendaciones.html?width=500" class="jTip" id="one" name="Sugerencias y Recomendaciones:"><img src="/imagenes/icons/help.png" /></a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type="submit" id="submit-button" class="btn"><span><span>&nbsp;Entrar&nbsp;</span></span></button>
                                      </li>
                                                     <?php
                                                        if(isset($msgerror) && $msgerror!='') echo '<div class="error">'.$msgerror.'</div>';
                                                        else if(isset($msg) && $msg!='') echo '<div class="msj">'.$msg.'</div>';
                                                    ?>
                                    </ul>
                              </form>
                     </div>
  
            </div><!--Fin div Cuerpo -->
