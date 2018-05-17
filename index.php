<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Google Maps JavaScript API</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<label for="">Address: <input id="map-search" class="controls" type="text" placeholder="Search Box" size="104"></label><br>
<label for="">Lat: <input type="text" class="latitude"></label>
<label for="">Long: <input type="text" class="longitude"></label>
<label for="">City <input type="text" class="reg-input-city" placeholder="City"></label>

<div id="map-canvas"></div>

<script src="javascript.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4ZF2GU_edxPVaVnbxcwuEvyyQhU21sFw&libraries=places&callback=initialize"></script>
</body>
</html>
