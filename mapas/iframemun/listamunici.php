<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="../estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="261" border="1">
        <tr>
          <td width="122" style="background-color:#E3E3E6"><div align="center">Municipios</div></td>
          <td width="43" style="background-color:#E3E3E6"><div align="center">N&deg;</div></td>
          <td width="82" style="background-color:#E3E3E6"><div align="center">Bs</div></td>
  </tr>
        <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=1" target="mainFrame1">Bol&iacute;var</a></div></td>
          <td><div align="center">
            <?php
include_once('../pasword/conexion.php');
conectar();
$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=1 ");
            while ($row = mysql_fetch_row($result)){ echo $row['0'];} ?>
          </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=1 ");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.'); ?>
            
            </div></td>
  </tr>
        <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=2" target="mainFrame1">Camatagua</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=2");
            while ($row = mysql_fetch_row($result)){ echo $row['0'];} ?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=2");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.'); ?>
            </div></td>
  </tr>
        
        <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=3" target="mainFrame1">Francisco Linares Alc&aacute;ntara</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=3"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=3");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=4" target="mainFrame1">Girardot</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=4"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=4");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=5" target="mainFrame1">Jos&eacute; Angel Lamas</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=5"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=5");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=6" target="mainFrame1">Jos&eacute; F&eacute;lix Ribas</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=6"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=6");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=7" target="mainFrame1">Jos&eacute; Rafael Revenga</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=7"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=7");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=8" target="mainFrame1">Libertador</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=8"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=8");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=9" target="mainFrame1">Mario Brice&ntilde;o Iragorry</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=9"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=9");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=10" target="mainFrame1">Ocumare de la Costa</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=10"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=10");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=11" target="mainFrame1">San Casimiro</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=11"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=11");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=12" target="mainFrame1">San Sebastian</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=12"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=12");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=13" target="mainFrame1">Santiago Mari&ntilde;o</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=13"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=13");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=14" target="mainFrame1">Santos Michelena</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=14"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=14");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=15" target="mainFrame1">Sucre</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=15"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=15");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=16" target="mainFrame1">Tovar</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=16"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=16");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=17" target="mainFrame1">Urdaneta</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=17"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=17");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=18" target="mainFrame1">Zamora</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=18"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=18");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
  </tr>
  <tr>
          <td style="background-color:#F2F2F2"><div align="left"><a href="municipio.php?id=19" target="mainFrame1">Varios Municipios</a></div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici=19"); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici=19");
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