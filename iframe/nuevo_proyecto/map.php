 <script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript">



function initialize() {

lon=-67.59247183799844;
lat=10.254173469140108;
  var myLatlng1 = new google.maps.LatLng('<?php $_GET["lat"]?>','<?php $_GET["lon"]?>');
  var markers = new Array();
  var myOptions1 = {
    center: myLatlng1,  
    zoom: 20,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }

//var myLatlng = new google.maps.LatLng('<?php $_GET["lat"]?>','<?php $_GET["lon"]?>');
var map2 = new google.maps.Map(document.getElementById("map_canvas"), myOptions1);



				

			var markerOptions1 = {
				position: myLatlng1, 
				map: map2,
				draggable: true		
			};

marker_0 = createMarker(markerOptions1);

			
				google.maps.event.addListener(marker_0, "dragend", function() {
					var point = marker_0.getPosition();$("#latitude").val(point.lat());$("#longitude").val(point.lng());
				});	
			
				
			
			}//FIN INICIALIZE
		
		
		function createMarker(markerOptions) {
			var marker = new google.maps.Marker(markerOptions);
			//markers.push(marker);
			//lat_longs.push(marker.getPosition());
			return marker;
		}
		
  
function loadScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initialize";
  document.body.appendChild(script);

}
  
window.onload = loadScript
</script>
    <td width="22%"><input class="required"   id="latitude" name="norte" type="text" size="20" maxlength="17" title="ejemplo'10.24044449875872'" value="10.253873900713513"></td>
    <td width="28%"><div align="center"><span style="font-size:15px">Longitud</span></div></td>
    <td width="25%"><input class="required" id="longitude" name="este" type="text" size="20" maxlength="18" value="-67.59231090545654"  title="ejemplo'-67.63770192861557'"></td>

<div id="map_canvas" style="width:100%; height:450px;"></div>
