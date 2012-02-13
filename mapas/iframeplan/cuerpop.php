<?php 

  include_once('../pasword/conexion.php');
conectar();	
			
			$result = mysql_query("SELECT COUNT(id)
FROM resumen  ");
            while ($row = mysql_fetch_row($result)){  $total=$row['0'];}
	


			$result = mysql_query("SELECT id,organ,ti_are,norte,este FROM resumen ");
			
            		
			
			
 ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html;charset=ISO-8859-1">
<title>Direcci&oacute;n de Proyectos</title>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAYqQoLLqdXbVZyGiQioOIuRTSFaae-jupSsmKXfvKJ95RBUUlzRRFzzv69nUC2dmYECfeJyoDlg5g2Q&sensor=true&indexing=false 
" 
type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[

var iconBlue = new GIcon(); 
    iconBlue.image = 'http://proyectos.aragua.gob.ve/map/images/mm_20_blue.png';
 iconBlue.shadow = 'http://proyectos.aragua.gob.ve/map/mm_20_shadow.png';
    iconBlue.iconSize = new GSize(12, 20);
    iconBlue.shadowSize = new GSize(22, 20);
    iconBlue.iconAnchor = new GPoint(6, 20);
    iconBlue.infoWindowAnchor = new GPoint(5, 1);

    var iconRed = new GIcon(); 
    iconRed.image = 'http://proyectos.aragua.gob.ve/map/images/mm_20_red.png'; iconRed.shadow = 'http://proyectos.aragua.gob.ve/map/images/mm_20_shadow.png';
    iconRed.iconSize = new GSize(12, 20);
    iconRed.shadowSize = new GSize(22, 20);
    iconRed.iconAnchor = new GPoint(6, 20);
    iconRed.infoWindowAnchor = new GPoint(5, 1);
	
	 var iconInfr = new GIcon(); 
    iconInfr.image = 'http://proyectos.aragua.gob.ve/map/images/icono.png'; iconRed.shadow = 'http://proyectos.aragua.gob.ve/map/images/mm_20_shadow.png';
    iconInfr.iconSize = new GSize(12, 20);
    iconInfr.shadowSize = new GSize(22, 20);
    iconInfr.iconAnchor = new GPoint(6, 20);
    iconInfr.infoWindowAnchor = new GPoint(5, 1);

    var customIcons = [];
    customIcons["2"] = iconBlue;
    customIcons["1"] = iconRed;
customIcons["3"] = iconInfr;

function load() {
   if (GBrowserIsCompatible()) {
      var map = new GMap2(document.getElementById("map")); 
	 
      map.setCenter(new GLatLng(10.253895015677251,-67.5923216342926),10);   
      map.addControl(new GLargeMapControl());
      map.addControl(new GMapTypeControl());
      //map.addControl(new GOverviewMapControl()); ;
      //map.setMapType(G_NORMAL_MAP);
      //map.setMapType(G_SATELLITE_MAP);
        map.setMapType(G_HYBRID_MAP); 
      
      //DEFINO EL ICONO
     
      
      function createMarker(point,nombre,continente,pais) {
      
         //CREO LA MARCA EN EL PUNTO Y CON EL ICONO DESEADO
            var marker = new GMarker(point, customIcons[pais]);
         
         GEvent.addListener(marker, 'click', function() {
         marker.openInfoWindowHtml("<img src='../images/logo_gober.jpg' width='30' height='30' />" + continente + "<br>Cod de Proyecto:&nbsp;"+ nombre + " <br><a target='resumen' href='resumen.php? id="+ nombre +"'>Resumen de la Ficha T&eacute;cnica</a>");
         });
         return marker;
      }
   		 <?php while ($row = mysql_fetch_row($result)){?>
         var point = new GPoint (<?php echo $row['4'];?>,<?php echo $row['3'];?>);
         var nombre = "<?php echo $row['0'];?>";
         var continente = "<?php echo $row['1'];?>";
         var pais = "<?php echo $row['2'];?>";
		     
         var marker = createMarker (point,nombre,continente,pais);
		
         map.addOverlay(marker);<?php }?>
         
         
        
      
         
         }
}



</script>

<link href="../estilo.css" rel="stylesheet" type="text/css" />
</head>

<body onload="load()" onunload="GUnload()">
<table width="100%" border="0">
  <tr>
    <td><div align="center">
      <table width="385" border="0">
        <tr>
          <td width="216" style="background-color:#E3E3E6">Resumen del Plan de Inversi&oacute;n</td>
          <td width="55" style="background-color:#E3E3E6"><div align="center">N&deg;</div></td>
          <td width="100" style="background-color:#E3E3E6"><div align="center">Bs</div></td>
          </tr>
        <tr>
          <td style="background-color:#F2F2F2"><div align="left">Fortalecimiento Institucional</div></td>
          <td><div align="center">
            <?php
	 include_once('../pasword/conexion.php');
conectar();	
$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_are=2  ");
 while ($row = mysql_fetch_row($result)){ echo $row['0'];} ?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_are=2 ");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.'); ?>
            
            </div></td>
          </tr>
        <tr>
          <td style="background-color:#F2F2F2"><div align="left">Inversi&oacute;n Productiva</div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_are=1 ");
            while ($row = mysql_fetch_row($result)){ echo $row['0'];} ?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_are=1");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.'); ?>
            </div></td>
          </tr>
        
        <tr>
          <td style="background-color:#F2F2F2"><div align="left">Infraestructura</div></td>
          <td><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen where ti_are=3 "); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen where ti_are=3 ");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.');?>
            </div></td>
          </tr>
        <tr>
          <td style="background-color:#E3E3E6">
            <div align="left">Total</div></td>
          <td style="background-color:#E3E3E6"><div align="center">
            <?php	$result = mysql_query("SELECT COUNT(cod)
FROM resumen "); 
 while ($row = mysql_fetch_row($result)){ echo $row['0'];}?>
            </div></td>
          <td style="background-color:#E3E3E6"><div align="right">
            <?php	$result = mysql_query("SELECT SUM(monto) FROM resumen ");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}echo  $a=number_format($a, 2, ',', '.'); ?>
          </div></td>
          </tr>
      </table>
    </div></td>
    <td width="30%" rowspan="2" valign="top"><table width="100%" border="0" class="fonplan12b">
      <tr>
        <td><iframe name="resumen" allowtransparency="yes" frameborder="0" height="550" width="100%" scrolling="auto" align="top" src="resumenvistaficha.php"></iframe></td>
        </tr>
</table></td>
  </tr>
  <tr>
    <td width="70%" valign="top"><div id="map" style="width: 100%; height: 450px"></div></td>
  </tr>
</table>



</body>
</html> 