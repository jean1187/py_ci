<?= doctype('html4-strict')?>
<html>
	<head>
<!-- ********************************************************************************************************** -->
                <link rel='shortcut icon' href='/imagenes/icons/favicon.ico' />
<!-- ********************************************************************************************************** -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
                <!-- ********** Estilos y Js Generales  ***********-->
                <link type="text/css" href="/css/style.css" media="screen" rel="stylesheet" />
                <script type="text/javascript"  src='/js/jquery.js'></script>
<!-- ********************************************************************************************************** -->
                <!-- ********** Js del Menu  ***********-->
                <link type="text/css" href="/css/apycomMenu/menu.css" rel="stylesheet" />
                <script type="text/javascript" src="/js/apycomMenu/menu.js"></script>
<!-- ********************************************************************************************************** -->
                 <!-- ********** 960 Grid  ***********-->
                 <link type="text/css" href="/css/960Grid/reset.css" media="screen" rel="stylesheet" />
                 <link type="text/css" href="/css/960Grid/text.css" media="screen" rel="stylesheet" />
                 <link type="text/css" href="/css/960Grid/960_24_col.css" media="screen" rel="stylesheet" />
                
<!-- ********************************************************************************************************** -->
    <title><?=$title?></title>
</head>
<body>
<div  class="container_24"><!-- cierra en pie -->
    
        <header id="cabecera" >
            <div class="grid_2 suffix_1">
                    <img width="70" heigth="52" src="<?=base_url()?>/imagenes/logo.png">
            </div>
            <div class="grid_14">
                <h3><?=$title?></h3>
            </div>    
            <div class="grid_7 omega alpha">
                    <div class="grid_7">
                        
                        <b>Usuario : </b><?=$user["nombre"]." ".$user["apellido"]?>
                    </div>    
                    <div class="clear"></div>
                    <div class="grid_7">
                        <b>Organo : </b><?php echo $user["organo"]?>
                    </div>                    
                    <div class="clear"></div>
                    <div class="grid_7">
                        <b>Carga : </b>{elapsed_time}
                    </div>                    
            </div>  
        </header>
       <div class="clear"></div>
                            <div id="menu" class="grid_24">
                                <ul class="menu">
                                    <li><a href="<?php echo base_url();?>" ><span>Inicio</span></a></li>
                                            <?php

                                                echo $user["menu"]
                                            ?>
                                    <li class="last"><a href="/login/salir"><span>salir</span></a></li>
                                </ul>
                            </div>

                            <div id="copyright">Copyright &copy; 2011 <a href="http://apycom.com/">Apycom jQuery Menus</a></div>