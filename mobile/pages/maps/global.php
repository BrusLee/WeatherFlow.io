<?php

	############################################################################
	# 	
	#	Meteotemplate
	# 	http://www.meteotemplate.com
	# 	Free website template for weather enthusiasts
	# 	Author: Jachym
	#           Brno, Czech Republic
	# 	First release: 2015
	#
	############################################################################
	#
	#	Global Weather Map
	#
	# 	A script showing an interactive world map with layers temperature,
	#	wind speed and pressure.
	#
	#############################################################################
	#	
	#
	# 	v17.0 Nectarine 2017-12-31
	#
	############################################################################

	include("../../../config.php");
	include("../../../css/design.php");
	include("../../header.php");

	if($displayWindUnits=="kmh"){
		$mapunitsW = "km%2Fh";
	}
	if($displayWindUnits=="ms"){
		$mapunitsW = "m%2Fs";
	}
	if($displayWindUnits=="mph"){
		$mapunitsW = "mph";
	}
	if($displayWindUnits=="kt"){
		$mapunitsW = "kt";
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $pageName?></title>
		<?php metaHeader()?>
		<style>
			
		</style>
	</head>
	<body>
		<div id="main_top">
			<?php bodyHeader();?>
			<?php include("../../menu.php");?>
		</div>
		<div id="main" style="text-align:center">
			<iframe src="https://embed.windy.com/embed2.html?lat=<?php echo $stationLat?>&lon=<?php echo $stationLon?>&zoom=5&level=surface&overlay=temp&menu=&message=&marker=&forecast=12&calendar=now&location=coordinates&type=map&actualGrid=&metricWind=kt&metricTemp=%C2%B0<?php echo $displayTempUnits?>" style="border:none;width:95%;height:400px">
			</iframe>
		</div>
		<?php include("../../footer.php");?>
	</body>
</html>
	