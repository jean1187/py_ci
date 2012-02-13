<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="../estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include_once('../pasword/conexion.php');
?>
         
		 
		
        
        
  <table width="100%" border="1">
 <tr class="tabla">
 
    <td><div align="center">Organo</div></td>
  <td><div align="center">N&deg; Proyectos</div></td>
  <td><div align="center">Total</div></td>
  </tr>
<?php conectar();
 $result = mysql_query("SELECT cod,ente.opcion,organ,COUNT(*),sum(monto) FROM resumen,ente  where resumen.idente=ente.id and aprobado=1 GROUP BY  cod

  "); while ($row = mysql_fetch_row($result)){ $cod=$row['0'];$ente=$row['1'];$organo=$row['2']; $nproyecto=$row['3'];$totalp=$row['4']; ?>
 <tr >
 
    <td><a href="organo.php? id=<?php echo $cod ?>" target="mainFrame1"><?php echo $organo;?><br /><span style="color:#960B03"><?php echo $ente;?></span></a></td>
  <td><div align="center"><?php echo $nproyecto;?></div></td>
  <td><div align="right"><?php echo  $b=number_format($totalp, 2, ',', '.');?></div></td>
  </tr><?php }?>
<tr>
          <td >
<div align="left" class="tabla">Total</div></td>
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