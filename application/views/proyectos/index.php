<?php echo $map['js']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Direcci&oacute;n de Proyectos" content="text/html; charset=iso-8859-1" />
<title>Direcci&oacute;n de Proyectos</title>
<link rel="shortcut icon" href="images/logo_gobernacion.ico" />
<link href="estilo.css" rel="stylesheet" type="text/css" />
<style type="text/css">
a:link {
	color: #FFF;
}
a:visited {
	color: #FFF;
}
a:hover {
	color: #FFF;
}
a:active {
	color: #FFF;
}
</style>
</head>
<body>


    
<h1 align="center">Bienvenido(a)</h1>
<br />
<p>NOTA: Debido a cambio en la &aacute;rea de inversi&oacute;n del Consejo Federal  de Gobierno &nbsp;deben &nbsp;de volver a seleccionar los campos <br />
  Gracias&hellip;
<table width="200" border="0">
  <tr>
    <td valign="top"> <table width="385" border="1">
  <tr>
    <td width="216" style="background-color:#E3E3E6"><div align="center"></div></td>
    <td width="55" style="background-color:#E3E3E6"><div align="center">N&deg;</div></td>
    <td width="100" style="background-color:#E3E3E6"><div align="center">Bs</div></td>
  </tr>
  <tr>
    <td style="background-color:#F2F2F2"><div align="left"><strong>Total de proyectos </strong></div></td>
    <td><?php echo $total["total_py"]?></td>
    <td><?php echo $total["monto_total"]?></td>
  </tr>
  </table><table width="100%" border="1">
  <tr>
    <td >
      <div align="left"><a href="newproyectos/resumen.php" target="_new"><span style="color:#000"><div align="center"><strong>Nueva Ficha T&eacute;cnica de Proyectos</strong></div>
        
      </span>
      <span style="color:#000">Nota:  Verifique si la ficha a ingresar no se encuentre en la sabana. Al llenar las Fichas para que salga en la sabana debe actualizar esta p&aacute;gina.
</span><span style="color:#F00">haga clic</span></a></div></td>
    </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td>
      <div align="left"><span style="color:#000"><div align="center"><strong>Modificar la Ficha T&eacute;cnica de Proyectos</strong></div></span>Nota: Para modificar la ficha, haga clic en el campo (N&deg; de Proyecto) en la fila a seleccionar de la sabana.
Ir&aacute; al formulario de modificaci&oacute;n donde cambiara los datos por cada campo deseado.
</div></td>
  </tr>
</table>

<table width="100%" border="1">
  <tr>
    <td>
      <div align="left"><a href="../newproyectos/lista.php" target="_new"><span style="color:#000"><div align="center"><strong>Impresi&oacute;n de la Ficha T&eacute;cnica de Proyectos</strong></div>
      </span> <span style="color:#000">Nota: Para Imprimir la Ficha T&eacute;cnica de Proyecto, se mostrara la sabana con los datos debe hacer clic en el campo del Numero, en la fila a seleccionar de la sabana.. </span><span style="color:#F00">haga clic</span></a></div>
    </td>
  </tr>
</table>

<table width="100%" border="1">
  <tr>
    <td><a href="planinversion/planinv.php"><span style="color:#000"><div align="center"><strong>Plan de Inversi&oacute;n</strong></div></span> <span style="color:#000">Nota: El Plan de Inversi&oacute;n deben ser registrado por est&eacute; formato una sola vez.  </span><span style="color:#F00">haga clic</span></a>
    <br />
    <a href="planinversion/planinmod.php"><span style="color:#000">Para modificar el plan de inversi&oacute;n. </span><span style="color:#F00">haga clic</span></a>
    <br />
    <a href="planinversion/planinvista.php"  target="_new"><span style="color:#000">Si desea visualizar el plan de inversi&oacute;n. </span><span style="color:#F00">haga clic</span></a></td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td>

    <a href="planillav/planillalistaimpr.php?cod=" target="_new"><span style="color:#000">Para imprimir el Proyecto. </span><span style="color:#F00">haga clic</span></a>
</td>
  </tr>
</table>


<table width="100%" border="2">
  <tr>
    <td><div align="center"><?php echo $map['html']; ?>      </div></td>
  </tr>
</table>

</td>
    <td valign="top">
    ------------------------------------------------------------------------------
    <strong>LISTA DE PROYECTOS PROPUESTA AL FCI PARA 2012</strong>
    <table width="385" border="1">
  <tr>
    <td colspan="3" style="background-color:#E3E3E6"><div align="center"><strong>Resumen del Plan de Inversi&oacute;n 2012 por FCI</strong> </div></td>
    </tr>
  <tr>
    <td width="216" style="background-color:#E3E3E6"><div align="center">Descripci&oacute;n</div></td>
    <td width="55" style="background-color:#E3E3E6"><div align="center">N&deg;</div></td>
    <td width="100" style="background-color:#E3E3E6"><div align="center">Bs</div></td>
  </tr>
  	<?php 
	    $total_py_fci=0;$monto_total_fci=0;
	        foreach ($PlandeInversion_FCI as $key=>$valor){ ?>
						  <tr>
							<td style="background-color:#F2F2F2"><div align="left"><?php echo  $key?></div></td>
							<td><div align="center">
							   <?php $total_py_fci+=$valor["total_py"]; echo $valor["total_py"]?>
							</div></td>
							<td><div align="right">
								<?php $monto_total_fci+=$valor["monto_total"];  echo $valor["monto_total"]?>
							</div></td>
						  </tr>
	<?php }?>
  
  <tr>
    <td style="background-color:#E3E3E6"><hR />
      <div align="left">Total</div></td>
    <td ><hR /><div align="center">
        <?php echo $total_py_fci?>     
    </div></td>
    <td><hR align="right" />
      <div align="right">
        <?php echo $monto_total_fci?>
      </div></td>
  </tr>
</table>
      <TABLE border="">
          <TR class="tabla">
                <td><div align="center">N&deg; de Proyecto</div></td>
                <td><div align="center"><span style="color:#F00">Observaci&oacute;n de la Direcci&oacute;n de Proyectos</span></div></td>
                <td><div align="center">Nombre del Proyecto</div></td>
                <td><div align="center">&iquest; Qu&eacute; &Aacute;rea del Plan de Desarrollo se Apalancar&aacute; con este Plan de Inversi&oacute;n ?</div></td>
                <td><div align="center">Organismo Responsable</div></td>
                <td><div align="center">Ente Ejecutor</div></td>
                <td><div align="center">Descripci&oacute;n del Proyecto</div></td>
                <td><div align="center">Etapa del Proyecto</div></td>
                <td><div align="center">Fase del Proyecto</div></td>
                <td><div align="center">Tipo de Proyecto</div></td>
                <td><div align="center">Categoria</div></td>
				<td><div align="center">Area de Inversi&oacute;n</div></td>
                <td><div align="center">Nombre del Responsable</div></td>
                <td><div align="center">Unidad de Adscripci&oacute;n</div></td>
                <td><div align="center">Cargo</div></td>
                <td><div align="center">Correo Electr&oacute;nico</div></td>
                <td><div align="center">Tel&eacute;fono</div></td>
                <td><div align="center">Fax</div></td>
                <td><div align="center">Municipio</div></td>
                <td><div align="center">Parroquia</div></td>
                <td><div align="center">Sector o Consejo Comunal</div></td>
                <td><div align="center">Norte</div></td>
                <td><div align="center">Este</div></td>
                <td><div align="center">Directriz</div></td>
                <td><div align="center">Objetivo</div></td>
                <td><div align="center">Estrategia</div></td>
                <td><div align="center">Pol&iacute;tica</div></td>
                <td><div align="center">Tiempo estimado de Ejecuci&oacute;n</div></td>
                <td><div align="center">Monto total del Proyecto</div></td>
                <td><div align="center">Otras Fuentes de Financiamiento</div></td>
                <td><div align="center">Impacto Social</div></td>
                <td><div align="center">Poblaci&oacute;n Beneficiada</div></td>
                <td><div align="center">Avance F&iacute;sico</div></td>
                <td><div align="center">Avance Financiero</div></td>
                <td><div align="center">Empleos Directos</div></td>
                <td><div align="center">Empleos Indirectos</div></td>
                <td><div align="center">Articulaci&oacute;n con otros Entes</div></td>
                <td><div align="center">Competencias a Transferir</div></td>
                <td><div align="center">Observaciones</div></td>
  </TR>
                   <?php  
				   
				   foreach ($ListaPlandeInversion_FCI as $key=>$valor) { ?> 
									<TR>
						<td height="99" colspan='1' ><div class="scrollv1">
						  <div align="center"><a href="newproyectosm/resumenvista.php?id="  title="hacer clip"><span style="color:#F00"><?php echo $valor["id"]?></span></a></div>
						</div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["observa"] ?></div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["nopro"] ?></div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["area"] ?></div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["organ"] ?></div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["ejecu"] ?></div></td> 
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["descr"] ?></div></td> 
						<td colspan='1' ><div class="scrollv1"><?php if($valor["etapa1"]) echo "Preinversi&oacute;n<br>";if($valor["etapa2"]) echo "Proyecto Nuevo<br>";if($valor["etapa3"]) echo "Ampliaci&oacute;n o Modificaci&oacute;n<br>";if($valor["etapa4"]) echo "Culminaci&oacute;n<br>"; ?></div></td> 
						<td colspan='1' ><div class="scrollv1"><?php echo arabigo2romano($valor["fase"])?></div></td> 
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["tipo_py"]?></div></td> 
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["categoria"]?></div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["area"]?></div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["norespro"]?></div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["unidad"]?></div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["cargo"]?></div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["correo"]?></div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["telf"]?></div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["fax"]?></div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["municipio"]?></div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["parroquia"]?></div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["cocomu"]?></div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["norte"]?></div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["este"]?></div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["lineas"]?></div></td>
						<td colspan='1' ><div class="scrollv1"><?php echo $valor["objedos"]?></div></td>
						<td colspan='1' ><div class="scrollv1"></div></td>
						<td colspan='1' ><div class="scrollv1"></div></td>
						<td colspan='1' ><div class="scrollv1"></div></td>
						<td colspan='1' ><div class="scrollv1"></div></td>
						<td colspan='1' ><div class="scrollv1"></div></td>
						<td colspan='1' ><div class="scrollv1"></div></td>
						<td colspan='1' ><div class="scrollv1"></div></td> 
						<td colspan='1' ><div class="scrollv1"></div></td>
						<td colspan='1' ><div class="scrollv1"></div></td>
						<td colspan='1' ><div class="scrollv1"></div></td>
						<td colspan='1' ><div class="scrollv1"></div></td>
						<td colspan='1' ><div class="scrollv1"></div></td>
						<td colspan='1' ><div class="scrollv1"></div></td>
						<td colspan='1' ><div class="scrollv1"></div></td>
						</TR>

           <?php }    ?> 
                    
</TABLE>
------------------------------------------------------------------------------
<strong>LISTA DE PROYECTOS PROPUESTA PARA EL SITUADO  PARA 2012</strong>
<table width="385" border="0">
  <tr>
    <td colspan="3" style="background-color:#E3E3E6"><div align="center"><strong>Resumen del Plan de Inversi&oacute;n 2012 por Situado</strong>  </div></td>
    </tr>
  <tr>
    <td width="216" style="background-color:#E3E3E6"><div align="center">Descripci&oacute;n</div></td>
    <td width="55" style="background-color:#E3E3E6"><div align="center">N&deg;</div></td>
    <td width="100" style="background-color:#E3E3E6"><div align="center">Bs</div></td>
  </tr>

  <tr>
    <td style="background-color:#F2F2F2"><div align="left">Total de Proyectos </div></td>
    <td><div align="center">
      <?php /*	$result = mysql_query("SELECT COUNT(cod),sum(monto) FROM resumen where aprobado=1 and factible=1 and situadoc!=0  and cod='$sum' "); 
 while ($row = mysql_fetch_row($result)){ echo $s=$row['0'];*/ ?>
      </div></td>
    <td><div align="right">
      <?php /* $s1=$row['1'];echo number_format($row['1'], 2, ',', '.');}*/ ?>
      </div></td>
  </tr>
  
</table>
      <TABLE border="">
          <TR class="tabla">
                <td><div align="center">N&deg; de Proyecto</div></td>
                <td><div align="center">Nombre del Proyecto</div></td>
                <td><div align="center">&iquest; Qu&eacute; &Aacute;rea del Plan de Desarrollo se Apalancar&aacute; con este Plan de Inversi&oacute;n ?</div></td>
                <td><div align="center">Organismo Responsable</div></td>
                <td><div align="center">Ente Ejecutor</div></td>
                <td><div align="center">Descripci&oacute;n del Proyecto</div></td>
                <td><div align="center">Etapa del Proyecto</div></td>
                <td><div align="center">Fase del Proyecto</div></td>
                <td><div align="center">Tipo de Proyecto</div></td>
                <td><div align="center">Categoria</div></td>
				<td><div align="center">Area de Inversi&oacute;n</div></td>
                <td><div align="center">Nombre del Responsable</div></td>
                <td><div align="center">Unidad de Adscripci&oacute;n</div></td>
                <td><div align="center">Cargo</div></td>
                <td><div align="center">Correo Electr&oacute;nico</div></td>
                <td><div align="center">Tel&eacute;fono</div></td>
                <td><div align="center">Fax</div></td>
                <td><div align="center">Municipio</div></td>
                <td><div align="center">Parroquia</div></td>
                <td><div align="center">Sector o Consejo Comunal</div></td>
                <td><div align="center">Norte</div></td>
                <td><div align="center">Este</div></td>
                <td><div align="center">Directriz</div></td>
                <td><div align="center">Objetivo</div></td>
                <td><div align="center">Estrategia</div></td>
                <td><div align="center">Pol&iacute;tica</div></td>
                <td><div align="center">Tiempo estimado de Ejecuci&oacute;n</div></td>
                <td><div align="center">Monto total del Proyecto</div></td>
                <td><div align="center">Otras Fuentes de Financiamiento</div></td>
                <td><div align="center">Impacto Social</div></td>
                <td><div align="center">Poblaci&oacute;n Beneficiada</div></td>
                <td><div align="center">Avance F&iacute;sico</div></td>
                <td><div align="center">Avance Financiero</div></td>
                <td><div align="center">Empleos Directos</div></td>
                <td><div align="center">Empleos Indirectos</div></td>
                <td><div align="center">Articulaci&oacute;n con otros Entes</div></td>
                <td><div align="center">Competencias a Transferir</div></td>
                <td><div align="center">Observaciones</div></td>
  </TR>
        <?php /* 
		
 $result = mysql_query("SELECT  resumen. id,nopro,lineaestada.opcion,organ,ejecu,descr,etapa1,etapa2,etapa3,etapa4,fase,tipoin.opcion,catego.opcion,area.opcion,norespro,unidad,cargo,correo,telf,fax,municipio.opcion, parroquia.opcion,cocomu,norte,este,lineas.opcion,objedos.opcion,estrados.opcion,polidos.opcion,tiempo,monto,otra,impsoc,pobl,avafisico,avafinanc,empdirec,empindi,articu,compone,observa FROM resumen,lineaestada,tipoin,catego,area,municipio,parroquia,lineas,objedos,estrados,polidos WHERE  resumen.lineaesta=lineaestada.id and resumen.ti_pro=tipoin.id and resumen.ti_cate=catego.id and resumen.ti_are=area.id and resumen.munici=municipio.id and resumen.parroq=parroquia.id  and 
resumen.directriz=lineas.id and resumen.objetivo=objedos.id and
resumen.estrategia=estrados.id and resumen.politica=polidos.id and aprobado=1 and factible=1 and situadoc!=0 and
cod like '$sum' ORDER BY `resumen`.`id` ASC");*/ ?>
         
		 
		<?php /* while ($row = mysql_fetch_row($result)){  */ ?>
            <TR>
<td height="99" colspan='1' ><div class="scrollv1">
  <div align="center"><a href="newproyectosm/resumenvista.php?id=<?php /* echo $row['0']; */ ?>" target="_new" title="hacer clip"><span style="color:#F00"> <?php /* echo $row['0']; */ ?></span></a></div>
</div></td> 
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['1']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['2']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['3']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['4']; */ ?></div></td> 
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['5']; */ ?></div></td> 
<td colspan='1' ><div class="scrollv1">
<?php /*  
switch ( $row['6']){
	case 1:
	print "<div align='left'>Preinversi&oacute;n</div>";
   	break;
	
	case 0: 
	print " ";
   	break;}

*/ ?>
<br />
<?php /*  
switch ( $row['7']){
	case 1:
	print "<div align='left'>Proyecto Nuevo</div>";
   	break;
	
	case 0:
	print " ";
   	break;}

*/ ?><br />
<?php /*  
switch ( $row['8']){
	case 1:
	print "<div align='left'>Ampliaci&oacute;n o Modificaci&oacute;n</div>";
   	break;
	
	case 0:
	print " ";
   	break;}

*/ ?><br />
<?php /*  
switch ( $row['9']){
	case 1:
	print "<div align='left'>Culminaci&oacute;n</div>";
   	break;
	
	case 0:
	print " ";
   	break;}

*/ ?></div></td> 
<td colspan='1' ><div class="scrollv1">
 <?php /*      
      switch ($row[10]){
	case 1:
	print "I";
   	break;
	
	
	case 2:
	print "II";
   	break;
	
	
	case 3:
	print "III";
   	break;
	
	
	case 4:
	print "IV";
   	break;
	
	case 5:
	print "V";
   	break;
	
	
	case 6:
	print "VI";
   	break;
	
	
	case 7:
	print "VII";
   	break;
	
	
	
	}

*/ ?></div></td> 
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['11']; */ ?></div></td> 
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['12']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['13']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['14']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['15']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['16']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['17']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['18']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['19']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['20']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['21']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['22']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['23']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['24']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['25']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['26']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['27']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['28']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['29']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /*  $a=$row['30'];echo  $a=number_format($a, 2, ',', '.'); */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['31']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['32']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['33']; */ ?></div></td> 
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['34']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['35']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['36']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['37']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['38']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['39']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['40']; */ ?></div></td>
</TR>

           <?php /* }    */ ?> 
                    
</TABLE>
------------------------------------------------------------------------------
<strong>LISTA DE PROYECTOS PROPUESTA PARA OTRA FUENTE  PARA 2012</strong>
<table width="385" border="0">
  <tr>
    <td colspan="3" style="background-color:#E3E3E6"><div align="center"><strong>Resumen del Plan de Inversi&oacute;n 2012 por otra Fuente</strong>  </div></td>
    </tr>
  <tr>
    <td width="216" style="background-color:#E3E3E6"><div align="center">Descripci&oacute;n</div></td>
    <td width="55" style="background-color:#E3E3E6"><div align="center">N&deg;</div></td>
    <td width="100" style="background-color:#E3E3E6"><div align="center">Bs</div></td>
  </tr>

  <tr>
    <td style="background-color:#F2F2F2"><div align="left">Total de Proyectos </div></td>
    <td><div align="center">
      <?php /*	$result = mysql_query("SELECT COUNT(cod),sum(monto) FROM resumen where aprobado=1 and factible=1 and otrafuente!=0  and cod='$sum' "); 
 while ($row = mysql_fetch_row($result)){ echo $s=$row['0'];*/ ?>
      </div></td>
    <td><div align="right">
      <?php /* $s1=$row['1'];echo number_format($row['1'], 2, ',', '.');}*/ ?>
      </div></td>
  </tr>
  
</table>
      <TABLE border="">
          <TR class="tabla">
                <td><div align="center">N&deg; de Proyecto</div></td>
                <td><div align="center">Nombre del Proyecto</div></td>
                <td><div align="center">&iquest; Qu&eacute; &Aacute;rea del Plan de Desarrollo se Apalancar&aacute; con este Plan de Inversi&oacute;n ?</div></td>
                <td><div align="center">Organismo Responsable</div></td>
                <td><div align="center">Ente Ejecutor</div></td>
                <td><div align="center">Descripci&oacute;n del Proyecto</div></td>
                <td><div align="center">Etapa del Proyecto</div></td>
                <td><div align="center">Fase del Proyecto</div></td>
                <td><div align="center">Tipo de Proyecto</div></td>
                <td><div align="center">Categoria</div></td>
				<td><div align="center">Area de Inversi&oacute;n</div></td>
                <td><div align="center">Nombre del Responsable</div></td>
                <td><div align="center">Unidad de Adscripci&oacute;n</div></td>
                <td><div align="center">Cargo</div></td>
                <td><div align="center">Correo Electr&oacute;nico</div></td>
                <td><div align="center">Tel&eacute;fono</div></td>
                <td><div align="center">Fax</div></td>
                <td><div align="center">Municipio</div></td>
                <td><div align="center">Parroquia</div></td>
                <td><div align="center">Sector o Consejo Comunal</div></td>
                <td><div align="center">Norte</div></td>
                <td><div align="center">Este</div></td>
                <td><div align="center">Directriz</div></td>
                <td><div align="center">Objetivo</div></td>
                <td><div align="center">Estrategia</div></td>
                <td><div align="center">Pol&iacute;tica</div></td>
                <td><div align="center">Tiempo estimado de Ejecuci&oacute;n</div></td>
                <td><div align="center">Monto total del Proyecto</div></td>
                <td><div align="center">Otras Fuentes de Financiamiento</div></td>
                <td><div align="center">Impacto Social</div></td>
                <td><div align="center">Poblaci&oacute;n Beneficiada</div></td>
                <td><div align="center">Avance F&iacute;sico</div></td>
                <td><div align="center">Avance Financiero</div></td>
                <td><div align="center">Empleos Directos</div></td>
                <td><div align="center">Empleos Indirectos</div></td>
                <td><div align="center">Articulaci&oacute;n con otros Entes</div></td>
                <td><div align="center">Competencias a Transferir</div></td>
                <td><div align="center">Observaciones</div></td>
  </TR>
        <?php /* 
		
 $result = mysql_query("SELECT  resumen. id,nopro,lineaestada.opcion,organ,ejecu,descr,etapa1,etapa2,etapa3,etapa4,fase,tipoin.opcion,catego.opcion,area.opcion,norespro,unidad,cargo,correo,telf,fax,municipio.opcion, parroquia.opcion,cocomu,norte,este,lineas.opcion,objedos.opcion,estrados.opcion,polidos.opcion,tiempo,monto,otra,impsoc,pobl,avafisico,avafinanc,empdirec,empindi,articu,compone,observa FROM resumen,lineaestada,tipoin,catego,area,municipio,parroquia,lineas,objedos,estrados,polidos WHERE  resumen.lineaesta=lineaestada.id and resumen.ti_pro=tipoin.id and resumen.ti_cate=catego.id and resumen.ti_are=area.id and resumen.munici=municipio.id and resumen.parroq=parroquia.id  and 
resumen.directriz=lineas.id and resumen.objetivo=objedos.id and
resumen.estrategia=estrados.id and resumen.politica=polidos.id and aprobado=1 and factible=1 and otrafuente!=0 and
cod like '$sum' ORDER BY `resumen`.`id` ASC");*/ ?>
         
		 
		<?php /* while ($row = mysql_fetch_row($result)){  */ ?>
            <TR>
<td height="99" colspan='1' ><div class="scrollv1">
  <div align="center"><a href="newproyectosm/resumenvista.php?id=<?php /* echo $row['0']; */ ?>" target="_new" title="hacer clip"><span style="color:#F00"><?php /* echo $row['0']; */ ?> </span></a></div>
</div></td> 
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['1']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['2']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['3']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['4']; */ ?></div></td> 
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['5']; */ ?></div></td> 
<td colspan='1' ><div class="scrollv1">
<?php /*  
switch ( $row['6']){
	case 1:
	print "<div align='left'>Preinversi&oacute;n</div>";
   	break;
	
	case 0: 
	print " ";
   	break;}

*/ ?>
<br />
<?php /*  
switch ( $row['7']){
	case 1:
	print "<div align='left'>Proyecto Nuevo</div>";
   	break;
	
	case 0:
	print " ";
   	break;}

*/ ?><br />
<?php /*  
switch ( $row['8']){
	case 1:
	print "<div align='left'>Ampliaci&oacute;n o Modificaci&oacute;n</div>";
   	break;
	
	case 0:
	print " ";
   	break;}

*/ ?><br />
<?php /*  
switch ( $row['9']){
	case 1:
	print "<div align='left'>Culminaci&oacute;n</div>";
   	break;
	
	case 0:
	print " ";
   	break;}

*/ ?></div></td> 
<td colspan='1' ><div class="scrollv1">
 <?php /*      
      switch ($row[10]){
	case 1:
	print "I";
   	break;
	
	
	case 2:
	print "II";
   	break;
	
	
	case 3:
	print "III";
   	break;
	
	
	case 4:
	print "IV";
   	break;
	
	case 5:
	print "V";
   	break;
	
	
	case 6:
	print "VI";
   	break;
	
	
	case 7:
	print "VII";
   	break;
	
	
	
	}

*/ ?></div></td> 
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['11']; */ ?></div></td> 
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['12']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['13']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['14']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['15']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['16']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['17']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['18']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['19']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['20']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['21']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['22']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['23']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['24']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['25']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['26']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['27']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['28']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['29']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /*  $a=$row['30'];echo  $a=number_format($a, 2, ',', '.'); */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['31']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['32']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['33']; */ ?></div></td> 
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['34']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['35']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['36']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['37']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['38']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['39']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['40']; */ ?></div></td>
</TR>

           <?php /* }    */ ?> 
                    
</TABLE>
------------------------------------------------------------------------------
<strong>LISTA DE PROYECTOS  SIN PROPUESTA</strong>
<table width="385" border="0">
  <tr>
    <td colspan="3" style="background-color:#E3E3E6"><div align="center"><strong>Resumen del Plan de Inversi&oacute;n sin Propuesta</strong>  </div></td>
    </tr>
  <tr>
    <td width="216" style="background-color:#E3E3E6"><div align="center">Descripci&oacute;n</div></td>
    <td width="55" style="background-color:#E3E3E6"><div align="center">N&deg;</div></td>
    <td width="100" style="background-color:#E3E3E6"><div align="center">Bs</div></td>
  </tr>

  <tr>
    <td style="background-color:#F2F2F2"><div align="left">Total de Proyectos </div></td>
    <td><div align="center">
      <?php /*	$result = mysql_query("SELECT COUNT(cod),sum(monto) FROM resumen where aprobado=0  and cod='$sum' "); 
 while ($row = mysql_fetch_row($result)){ echo $s=$row['0'];*/ ?>
      </div></td>
    <td><div align="right">
      <?php /* $s1=$row['1'];echo number_format($row['1'], 2, ',', '.');}*/ ?>
      </div></td>
  </tr>
  
</table>
      <TABLE border="">
          <TR class="tabla">
                <td><div align="center">N&deg; de Proyecto</div></td>
                <td><div align="center">Nombre del Proyecto</div></td>
                <td><div align="center">&iquest; Qu&eacute; &Aacute;rea del Plan de Desarrollo se Apalancar&aacute; con este Plan de Inversi&oacute;n ?</div></td>
                <td><div align="center">Organismo Responsable</div></td>
                <td><div align="center">Ente Ejecutor</div></td>
                <td><div align="center">Descripci&oacute;n del Proyecto</div></td>
                <td><div align="center">Etapa del Proyecto</div></td>
                <td><div align="center">Fase del Proyecto</div></td>
                <td><div align="center">Tipo de Proyecto</div></td>
                <td><div align="center">Categoria</div></td>
				<td><div align="center">Area de Inversi&oacute;n</div></td>
                <td><div align="center">Nombre del Responsable</div></td>
                <td><div align="center">Unidad de Adscripci&oacute;n</div></td>
                <td><div align="center">Cargo</div></td>
                <td><div align="center">Correo Electr&oacute;nico</div></td>
                <td><div align="center">Tel&eacute;fono</div></td>
                <td><div align="center">Fax</div></td>
                <td><div align="center">Municipio</div></td>
                <td><div align="center">Parroquia</div></td>
                <td><div align="center">Sector o Consejo Comunal</div></td>
                <td><div align="center">Norte</div></td>
                <td><div align="center">Este</div></td>
                <td><div align="center">Directriz</div></td>
                <td><div align="center">Objetivo</div></td>
                <td><div align="center">Estrategia</div></td>
                <td><div align="center">Pol&iacute;tica</div></td>
                <td><div align="center">Tiempo estimado de Ejecuci&oacute;n</div></td>
                <td><div align="center">Monto total del Proyecto</div></td>
                <td><div align="center">Otras Fuentes de Financiamiento</div></td>
                <td><div align="center">Impacto Social</div></td>
                <td><div align="center">Poblaci&oacute;n Beneficiada</div></td>
                <td><div align="center">Avance F&iacute;sico</div></td>
                <td><div align="center">Avance Financiero</div></td>
                <td><div align="center">Empleos Directos</div></td>
                <td><div align="center">Empleos Indirectos</div></td>
                <td><div align="center">Articulaci&oacute;n con otros Entes</div></td>
                <td><div align="center">Competencias a Transferir</div></td>
                <td><div align="center">Observaciones</div></td>
  </TR>
        <?php /* 
		
 $result = mysql_query("SELECT  resumen. id,nopro,lineaestada.opcion,organ,ejecu,descr,etapa1,etapa2,etapa3,etapa4,fase,tipoin.opcion,catego.opcion,area.opcion,norespro,unidad,cargo,correo,telf,fax,municipio.opcion, parroquia.opcion,cocomu,norte,este,lineas.opcion,objedos.opcion,estrados.opcion,polidos.opcion,tiempo,monto,otra,impsoc,pobl,avafisico,avafinanc,empdirec,empindi,articu,compone,observa FROM resumen,lineaestada,tipoin,catego,area,municipio,parroquia,lineas,objedos,estrados,polidos WHERE  resumen.lineaesta=lineaestada.id and resumen.ti_pro=tipoin.id and resumen.ti_cate=catego.id and resumen.ti_are=area.id and resumen.munici=municipio.id and resumen.parroq=parroquia.id  and 
resumen.directriz=lineas.id and resumen.objetivo=objedos.id and
resumen.estrategia=estrados.id and resumen.politica=polidos.id and aprobado=0  and
cod like '$sum' ORDER BY `resumen`.`id` ASC");*/ ?>
         
		 
		<?php /* while ($row = mysql_fetch_row($result)){  */ ?>
            <TR>
<td height="99" colspan='1' ><div class="scrollv1">
  <div align="center"><a href="newproyectosm/resumenvista.php?id=<?php /* echo $row['0']; */ ?>" target="_new" title="hacer clip"><span style="color:#F00"> <?php /* echo $row['0']; */ ?></span></a></div>
</div></td> 
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['1']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['2']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['3']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['4']; */ ?></div></td> 
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['5']; */ ?></div></td> 
<td colspan='1' ><div class="scrollv1">
<?php /*  
switch ( $row['6']){
	case 1:
	print "<div align='left'>Preinversi&oacute;n</div>";
   	break;
	
	case 0: 
	print " ";
   	break;}

*/ ?>
<br />
<?php /*  
switch ( $row['7']){
	case 1:
	print "<div align='left'>Proyecto Nuevo</div>";
   	break;
	
	case 0:
	print " ";
   	break;}

*/ ?><br />
<?php /*  
switch ( $row['8']){
	case 1:
	print "<div align='left'>Ampliaci&oacute;n o Modificaci&oacute;n</div>";
   	break;
	
	case 0:
	print " ";
   	break;}

*/ ?><br />
<?php /*  
switch ( $row['9']){
	case 1:
	print "<div align='left'>Culminaci&oacute;n</div>";
   	break;
	
	case 0:
	print " ";
   	break;}

*/ ?></div></td> 
<td colspan='1' ><div class="scrollv1">
 <?php /*      
      switch ($row[10]){
	case 1:
	print "I";
   	break;
	
	
	case 2:
	print "II";
   	break;
	
	
	case 3:
	print "III";
   	break;
	
	
	case 4:
	print "IV";
   	break;
	
	case 5:
	print "V";
   	break;
	
	
	case 6:
	print "VI";
   	break;
	
	
	case 7:
	print "VII";
   	break;
	
	
	
	}

*/ ?></div></td> 
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['11']; */ ?></div></td> 
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['12']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['13']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['14']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['15']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['16']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['17']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['18']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['19']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['20']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['21']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['22']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['23']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['24']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['25']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['26']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['27']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['28']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['29']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /*  $a=$row['30'];echo  $a=number_format($a, 2, ',', '.'); */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['31']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['32']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['33']; */ ?></div></td> 
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['34']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['35']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['36']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['37']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['38']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['39']; */ ?></div></td>
<td colspan='1' ><div class="scrollv1"><?php /* echo $row['40']; */ ?></div></td>
</TR>


                    
</TABLE>

</td>
  </tr>
</table>
--asasas
</p>

</body>
</html>
