
<?php
 include_once('pasword/conexion.php');
conectar();			
 $id=$_GET["id"];
 $result = mysql_query("SELECT resumen.id,nopro,descr,municipio.opcion,parroquia.opcion,monto FROM resumen,municipio, parroquia
WHERE resumen.munici=municipio.id and
resumen.parroq=parroquia.id and resumen.id like '$id'");
while ($row = mysql_fetch_row($result)){$nombre=$row[1];$descri=$row[2];$municipio=$row[3];$parroquia=$row[4];$monto=$row[5];  }?>
  <!--Cod. del Proyecto N&deg;. <?php// echo $id?>
   -->
   <table width="100%" border="1" >
      <tr>
        <td colspan="3" ><div class="scrollm" align="justify"><strong>Nombre del Proyecto:</strong> &nbsp;<?php echo $nombre ?></div></td>
        
      </tr>
      <tr>
        <td colspan="3" ><div class="scrollm"><strong>Descripción del Proyecto</strong> &nbsp;<?php echo $descri ?></div></td>
       </tr>
      <tr>
        
        <td width="34%" >
        <div align="left"><strong>Municipio&nbsp;</strong><?php echo $municipio ?></div></td>
        <td width="38%" ><div align="left"><strong>Parroquia&nbsp;</strong><?php echo $parroquia ?></div></td>
        <td width="28%" ><div align="left"><strong>Monto&nbsp;</strong><?php echo  $monto=number_format($monto, 2, ',', '.'); ?></div></td>
        
      </tr>
      &nbsp;
      </table>

