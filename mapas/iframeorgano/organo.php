<?php 
$id=$_GET['id'];
  include_once('../pasword/conexion.php');
conectar();	

			$result = mysql_query("SELECT id,organ,norte,este FROM resumen where cod='$id'");
			
            		
			
			
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
      var iconoMarca = new GIcon(G_DEFAULT_ICON);
      
      iconoMarca.shadow = "images/icono.png";
      var tamanoSombra = new GSize(22,18);
      iconoMarca.shadowSize = tamanoSombra;
      
      
      function createMarker(point,nombre,continente,pais) {
      
         //CREO LA MARCA EN EL PUNTO Y CON EL ICONO DESEADO
         var marker = new GMarker(point, iconoMarca);
         
         GEvent.addListener(marker, 'click', function() {
         marker.openInfoWindowHtml("<img src='../images/logo_gober.jpg' width='30' height='30' />" + continente + "<br>Cod de Proyecto:&nbsp;"+ nombre + " <br><a target='resumen' href='resumen.php? id="+ nombre +"'>Resumen de la Ficha T&eacute;cnica</a>");
         });
         return marker;
      }
   		 <?php while ($row = mysql_fetch_row($result)){?>
         var point = new GPoint (<?php echo $row['3'];?>,<?php echo $row['2'];?>);
         var nombre = "<?php echo $row['0'];?>";
         var continente = "<?php echo $row['1'];?>";
         var pais = "espana";
         var marker = createMarker (point,nombre,continente,pais);
         map.addOverlay(marker);<?php }?>
         
         
        
      
         
         }
}



</script>

<link href="../estilo.css" rel="stylesheet" type="text/css" />
</head>

<body onload="load()" onunload="GUnload()">
<div align="center" class="fondogris"><strong>Direcci&oacute;n de Proyectos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>Plan de Inversi&oacute;n por Organos /Entes 2012-2013</strong></div>
<table width="100%" height="510" border="1">
<tr>
    <td height="550" colspan="2" valign="top"><div align="center"><iframe  allowtransparency="yes" frameborder="0" height="550" width="100%" scrolling="auto" align="top"  src="listaorgano.php"></iframe></div></td>
  </tr>
  <tr>
    <td width="70%" height="505" valign="top"><div id="map" style="width: 100%; height: 500px"></div></td>
    <td width="30%" valign="top">
    <!--<table width="100%" border="1">
      <tr>
    <td colspan="2" style="background-color:#F2F2F2"><div align="center" class="tabla">Municipio </div></td>
    </tr>
      <tr>
        <td width="53%"><div align="left" class="tabla">Total Proyectos</div></td>
        <td width="47%"><div align="center">
          <?php/
	
$result = mysql_query("SELECT COUNT(cod)
FROM resumen where munici='$id' ");
 while ($row = mysql_fetch_row($result)){ echo $row['0'];} ?>
        </div></td>
      </tr>
      <tr>
    <td><div align="left" class="tabla">Total Monto
      
    </div></td>
    <td><div align="center">
      <?php/	$result = mysql_query("SELECT SUM(monto) FROM resumen where munici='$id' ");
            while ($row = mysql_fetch_row($result)){ $a=$row['0'];}desconectar();echo  $a=number_format($a, 2, ',', '.');?>
    </div></td>
  </tr>
    </table>-->
    <table width="100%" border="0" class="fonplan12b">
  <tr>
    <td><iframe name="resumen" allowtransparency="yes" frameborder="0" height="500" width="100%" align="top" src="../bienvenida.php"></iframe></td>
    </tr>
</table>
</td>
  </tr>
</table>



</body>
</html> 