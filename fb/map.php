<?php 
	$address = str_replace(" ", "+", $address);

	$json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=$region");
	$json = json_decode($json);

	$lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
	$long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
	echo $lat;
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
?>

<style type="text/css">
	 #map {
    height: 50%;
    width: 50%;
    margin: 0px;
    padding: 0px
}
</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=geometry,places&ext=.js">
	
</script>


<script type="text/javascript">


}

function bindInfoWindow(marker, map, infowindow, strDescription) {
    google.maps.event.addListener(marker, 'click', function () {
        infowindow.setContent(strDescription);
        infowindow.open(map, marker);
    });
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div class="col-lg-12">
	<div id="map" style="border: 2px solid #3872ac;"></div>
</div>

<script type="text/javascript">
	window.onload = function() {
    var latlng = new google.maps.LatLng(51.4975941, -0.0803232);
    var map = new google.maps.Map(document.getElementById('map'), {
        center: latlng,
        zoom: 11,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title: 'Set lat/lon values for this property',
        draggable: true
    });
    google.maps.event.addListener(marker, 'dragend', function(a) {
        console.log(a);
        var div = document.createElement('div');
        div.innerHTML = a.latLng.lat().toFixed(4) + ', ' + a.latLng.lng().toFixed(4);
        document.getElementsByTagName('body')[0].appendChild(div);

        $.post('map.php',{ lat : a.latLng.lat().toFixed(4), lan : a.latLng.lng().toFixed(4) },function(res){
        	//console.log(res);
        });
    });
};
</script>

<?php 
	include "dbconfig.php";
	$lat = $_POST['lat'];
	$lon = $_POST['lan'];
	$userid = 1;
	function insertMap($userid,$lat,$lon){
		$date = "2015-10-30";
	    $query = mysql_query("insert into maped VALUES ('$userid','$lat','$lon','$date')");
		mysql_query($query);
	}
	insertMap($userid,$lat,$lon);
?>