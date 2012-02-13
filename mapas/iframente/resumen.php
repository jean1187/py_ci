<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Direcci&oacute;n de Proyectos</title>
<link href="../estilo.css" rel="stylesheet" type="text/css" />
</head>

<body><?php

 

 include_once('../pasword/conexion.php');
conectar();			
 $id=$_GET["id"];
 $result = mysql_query("SELECT resumen.id,cod,nopro,descr,municipio.opcion,parroquia.opcion,monto FROM resumen,municipio, parroquia
WHERE resumen.munici=municipio.id and
resumen.parroq=parroquia.id and resumen.id like '$id'");
while ($row = mysql_fetch_row($result)){$cod=$row[1];$nombre=$row[2];$descri=$row[3];$municipio=$row[4];$parroquia=$row[5];$monto=$row[6];  }?>
  Cod. del Proyecto N&deg;. <?php echo $id?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mapaprince.php? id=<?php echo $cod?>" target="resumen"><span style="color:#F00">Regresar al mapa</span></a><center><table width="200" border="0">
    <tr>
      <td ><div align="center"><strong>Nombre del Proyecto</strong></div><div class="scrollm" align="justify"><?php echo $nombre ?></div></td>
      
    </tr>
     <tr>
       <td ><div align="center"><strong>Descripción del Proyecto</strong></div><div class="scrollm"><?php echo $descri ?></div></td>
     </tr>
     <tr>
  
      <td >
      <div align="center"><strong>Municipio</strong></div><div class="scrollm"><?php echo $municipio ?></div></td>
      
    </tr>
     <tr>
 
      <td ><div align="center"><strong>Parroquia</strong></div><div class="scrollm"><?php echo $parroquia ?></div></td>
      
    </tr>
    
     <tr>
   
      <td ><div align="center"><strong>Monto</strong></div><div align="right" class="scrollm"><?php echo  $monto=number_format($monto, 2, ',', '.'); ?></div></td>
      
    
      
    </tr>
  </table></center>

</body>
</html>