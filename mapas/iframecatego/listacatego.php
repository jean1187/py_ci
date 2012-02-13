<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="../estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table border="1" bordercolor="#333333">
        <tr>
          <td width="221" style="background-color:#E3E3E6"><div align="center">Categorias</div></td>
          <td width="37" style="background-color:#E3E3E6"><div align="center">N&deg;</div></td>
          <td width="95" style="background-color:#E3E3E6"><div align="center">Bs</div></td>
  </tr>
        <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="categoria.php?id=1" target="mainFrame1">Comunidades Organizadas</a></div></td>
          <td><div align="center">
            <?php
include_once('../pasword/conexion.php');
conectar();
$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_cate=1 ");
            while ($row = mysql_fetch_row($result)){ echo $row['0'];} ?>
          </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_cate=1 ");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.'); ?>
            
            </div></td>
  </tr>
        <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="categoria.php?id=2" target="mainFrame1">Proceso de Descentralizaci&oacute;n o Cogestionarios</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_cate=2");
            while ($row = mysql_fetch_row($result)){ echo $row['0'];} ?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_cate=2");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.'); ?>
            </div></td>
  </tr>
        
        <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="categoria.php?id=3" target="mainFrame1">Acondicionamiento de Espacios F&iacute;sicos</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_cate=3"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_cate=3");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="categoria.php?id=4" target="mainFrame1">Ciencia y Tecnolog&iacute;a</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_cate=4"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_cate=4");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="categoria.php?id=5" target="mainFrame1">Adquisiciones Aisladas</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_cate=5"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_cate=5");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="categoria.php?id=6" target="mainFrame1">Adquisiciones de Impacto Social</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_cate=6"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_cate=6");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="categoria.php?id=7" target="mainFrame1">Agricola</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_cate=7"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_cate=7");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="categoria.php?id=8" target="mainFrame1">Agua Potable</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_cate=8"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_cate=8");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="categoria.php?id=9" target="mainFrame1">Educaci&oacute;n</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_cate=9"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_cate=9");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="categoria.php?id=10" target="mainFrame1">Electricidad Rural</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_cate=10"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_cate=10");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="categoria.php?id=11" target="mainFrame1">Electricidad Urbana</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_cate=11"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_cate=11");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="categoria.php?id=12" target="mainFrame1">Salud</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_cate=12"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_cate=12");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="categoria.php?id=13" target="mainFrame1">Sistemas Ferroviarios</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_cate=13"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_cate=13");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="categoria.php?id=14" target="mainFrame1">Turismo</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_cate=14"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_cate=14");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="categoria.php?id=15" target="mainFrame1">Vialidad</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_cate=15"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_cate=15");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="categoria.php?id=16" target="mainFrame1">Vivienda</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_cate=16"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_cate=16");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="categoria.php?id=17" target="mainFrame1">Lineamientos del Ejecutivo Nacional</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_cate=17"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_cate=17");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="categoria.php?id=18" target="mainFrame1">Proyectos con Recursos Mixtos</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_cate=18"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_cate=18");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
        <tr>
          <td style="background-color:#E3E3E6">
            <div align="left">Total</div></td>
          <td ><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen "); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
          </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen ");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.'); ?>
          </div></td>
  </tr>
</table>
</body>
</html>