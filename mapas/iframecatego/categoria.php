<?php 
$id=$_GET['id'];
  include_once('../pasword/conexion.php');
conectar();	

			$result = mysql_query("SELECT id,organ,norte,este FROM resumen where ti_cate='$id'");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
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
         marker.openInfoWindowHtml("<img src='../images/logo_gober.jpg' width='30' height='30' />" + continente + "<br>Cod de Proyecto:&nbsp;"+ nombre + " <br><a target='resumen' href='../resumen.php? id="+ nombre +"'>Resumen de la Ficha T&eacute;cnica</a>");
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
<div align="center" class="fondogris"><strong>Direcci&oacute;n de Proyectos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>Plan de Inversi&oacute;n por Categoria 2012-2013</strong></div>
<table width="100%" border="1">
<tr>
    <td height="150" colspan="2" valign="top"><iframe name="resumen" allowtransparency="yes" frameborder="0" height="150" width="100%" scrolling="auto" align="top" src="../bienvenida.php"></iframe></td>
  </tr>
  <tr>
    <td width="70%" height="525" valign="top"><div id="map" style="width: 100%; height: 520px"></div></td>
    <td width="30%" valign="top">
    <table width="100%" border="0" class="fonplan12b">
  <tr>
    <td><iframe  allowtransparency="yes" frameborder="0" height="520" width="100%" align="top" src="../iframecatego/listacatego.php"></iframe></td>
    </tr>
</table>
</td>
  </tr>
</table>
</body>
</html> 