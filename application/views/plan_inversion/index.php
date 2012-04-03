<h3 align="center">Lista de Plan de Invesion por a&ntilde;o </h3>
<table width="100%" border="1">
  <tr>
    <th>A&ntilde;o</th>
    <th>Justificaci&oacute;n</th>
    <th>Necesidades</th>
    <th>Potencialidades</th>
  </tr>
<?php 
foreach($listaPlan as $key=>$valor)
{?>
  <tr>
    <td><?php echo date('Y', strtotime($valor["fecha"]))?></td>
    <td><?php echo cambia_char($valor["justif"])?></td>
    <td><?php echo cambia_char($valor["necesi"])?></td>
    <td><?php echo cambia_char($valor["potencia"])?></td>
  </tr>
<?php
}
?>
</table>