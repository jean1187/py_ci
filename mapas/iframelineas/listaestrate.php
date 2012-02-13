<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="../estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table border="1">
        <tr>
          <td width="789" style="background-color:#E3E3E6"><div align="center">L&iacute;nea Estrat&eacute;gica</div></td>
          <td width="48" style="background-color:#E3E3E6"><div align="center">N&deg;</div></td>
          <td width="134" style="background-color:#E3E3E6"><div align="center">Bs</div></td>
  </tr>
        <tr>
          <td style="background-color:#F2F2F2"><div align="left">
          <a href="lineaestada.php?id=1" target="mainFrame1">
          Construcci&oacute;n din&aacute;mica del poder popular hacia el socialismo en el espacio regionalitario de Aragua</a></div></td>
          <td><div align="center">
            <?php
include_once('../pasword/conexion.php');
conectar();
$result = mysql_query("SELECT COUNT(cod)
FROM resumen where lineaesta=1 ");
            while ($row = mysql_fetch_row($result)){ echo $row['0'];} ?>
          </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where lineaesta=1 ");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.'); ?>
            
            </div></td>
  </tr>
        <tr>
          <td style="background-color:#F2F2F2"><div align="left">
          <a href="lineaestada.php?id=2" target="mainFrame1">
          Fortalecimiento del sistema educativo participativo bolivariano como continuo humano y la nueva racionalidad del metabolismo regionalitario</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where lineaesta=2");
            while ($row = mysql_fetch_row($result)){ echo $row['0'];} ?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where lineaesta=2");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.'); ?>
            </div></td>
  </tr>
        
        <tr>
          <td style="background-color:#F2F2F2"><div align="left">
          <a href="lineaestada.php?id=3" target="mainFrame1">
          Promoci&oacute;n de la vida y la salud como unidad mente-cuerpo-esp&iacute;ritu, para toda la existencia en los espacios localitarios de Aragua</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where lineaesta=3"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where lineaesta=3");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left">
          <a href="lineaestada.php?id=4" target="mainFrame1">
          Creaci&oacute;n del ambiente ecogeogr&aacute;fico para superar la escisi&oacute;n sociedad-naturaleza en el espacio regionalitario de Aragua</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where lineaesta=4"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where lineaesta=4");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left">
          <a href="lineaestada.php?id=5" target="mainFrame1">
          Creaci&oacute;n de la din&aacute;mica regionalitaria para superar la contradicci&oacute;n capital-trabajo</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where lineaesta=5"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where lineaesta=5");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left">
          <a href="lineaestada.php?id=6" target="mainFrame1">
          Construcci&oacute;n regionalitaria de la uni&oacute;n Estado-Sociedad como superaci&oacute;n de la escisi&oacute;n p&uacute;blico-privado</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where lineaesta=6"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where lineaesta=6");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left">
          <a href="lineaestada.php?id=7" target="mainFrame1">
          Transformaci&oacute;n de la din&aacute;mica estructural urbana y estructural regionalitaria de Aragua que oriente soluciones de los desequilibrios y asimetr&iacute;as</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where lineaesta=7"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where lineaesta=7");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left">
          <a href="lineaestada.php?id=8" target="mainFrame1">
          Construcci&oacute;n la nueva geometr&iacute;a pol&iacute;tica de la comuna en la din&aacute;mica regionalitaria</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where lineaesta=8"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where lineaesta=8");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left">
          <a href="lineaestada.php?id=9" target="mainFrame1">
          Creaci&oacute;n de la racionalidad revolucionaria para el desarrollo espiritual del ser social en la nueva din&iacute;mica regionalitaria</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where lineaesta=9"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where lineaesta=9");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
        <tr>
          <td style="background-color:#E3E3E6"><hR />
            <div align="left">Total</div></td>
          <td ><hR /><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen "); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><hR align="right" />
            <div align="right">
              <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen ");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.'); ?>
            </div></td>
  </tr>
</table>
</body>
</html>