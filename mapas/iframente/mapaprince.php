<?php 
$id=$_GET["id"];
  include_once('../pasword/conexion.php');
conectar();

			$result = mysql_query("SELECT id,organ,norte,este FROM resumen where cod='$id'");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html;charset=ISO-8859-1">
<title>Direcci&oacute;n de Proyectos</title>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAnfs7bKE82qgb3Zc2YyS-oBT2yXp_ZAY8_ufC3CFXhHIE1NvwkxSySz_REpPq-4WZA27OwgbtyR3VcA&sensor=true&indexing=false 
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
      
     iconoMarca.image = 'http://proyectos.aragua.gob.ve/map/images/icono.png';
      var tamanoIcono = new GSize(15,17);
      iconoMarca.iconSize = tamanoIcono;
    
      
      
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

<table width="100%" border="1">
<tr>
    <td width="70%" height="525" valign="top"><div id="map" style="width: 100%; height: 520px"></div></td>
  </tr>
</table>
</body>
</html> 