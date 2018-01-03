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
	#	METARs
	#
	# 	A script showing weather conditions based on METAR reports from all
	#	around the world.
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

	// get string of country codes
	$countryCodes = array();

	$countryCodes['ad'] = lang('Andorra','');
	$countryCodes['ae'] = lang('United Arab Emirates','');
	$countryCodes['af'] = lang('Afghanistan','');
	$countryCodes['ag'] = lang('Antigua and Barbuda','');
	$countryCodes['ai'] = lang('Anguilla','');
	$countryCodes['al'] = lang('Albania','');
	$countryCodes['am'] = lang('Armenia','');
	$countryCodes['ao'] = lang('Angola','');
	$countryCodes['aq'] = lang('Antarctica','');
	$countryCodes['ar'] = lang('Argentina','');
	$countryCodes['as'] = lang('American Samoa','');
	$countryCodes['at'] = lang('Austria','');
	$countryCodes['au'] = lang('Australia','');
	$countryCodes['aw'] = lang('Aruba','');
	$countryCodes['ax'] = lang('Aland Islands','');
	$countryCodes['az'] = lang('Azerbaijan','');
	$countryCodes['ba'] = lang('Bosnia and Herzegovina','');
	$countryCodes['bb'] = lang('Barbados','');
	$countryCodes['bd'] = lang('Bangladesh','');
	$countryCodes['be'] = lang('Belgium','');
	$countryCodes['bf'] = lang('Burkina Faso','');
	$countryCodes['bg'] = lang('Bulgaria','');
	$countryCodes['bh'] = lang('Bahrain','');
	$countryCodes['bi'] = lang('Burundi','');
	$countryCodes['bj'] = lang('Benin','');
	$countryCodes['bl'] = lang('Saint Barthelemy','');
	$countryCodes['bm'] = lang('Bermuda','');
	$countryCodes['bn'] = lang('Brunei Darussalam','');
	$countryCodes['bo'] = lang('Bolivia','');
	$countryCodes['br'] = lang('Brazil','');
	$countryCodes['bs'] = lang('Bahamas','');
	$countryCodes['bt'] = lang('Bhutan','');
	$countryCodes['bv'] = lang('Bouvet Island','');
	$countryCodes['bw'] = lang('Botswana','');
	$countryCodes['by'] = lang('Belarus','');
	$countryCodes['bz'] = lang('Belize','');
	$countryCodes['ca'] = lang('Canada','');
	$countryCodes['cc'] = lang('Cocos','');
	$countryCodes['cd'] = lang('Democratic Republic Of Congo','');
	$countryCodes['cf'] = lang('Central African Republic','');
	$countryCodes['cg'] = lang('Congo','');
	$countryCodes['ci'] = lang('Cote d\'Ivoire','');
	$countryCodes['ck'] = lang('Cook Islands','');
	$countryCodes['cl'] = lang('Chile','');
	$countryCodes['cm'] = lang('Cameroon','');
	$countryCodes['cn'] = lang('China','');
	$countryCodes['co'] = lang('Colombia','');
	$countryCodes['cr'] = lang('Costa Rica','');
	$countryCodes['cu'] = lang('Cuba','');
	$countryCodes['cv'] = lang('Cabo Verde','');
	$countryCodes['cw'] = lang('Curacao','');
	$countryCodes['cx'] = lang('Christmas Island','');
	$countryCodes['cy'] = lang('Cyprus','');
	$countryCodes['cz'] = lang('Czech Republic','');
	$countryCodes['de'] = lang('Germany','');
	$countryCodes['dj'] = lang('Djibouti','');
	$countryCodes['dk'] = lang('Denmark','');
	$countryCodes['dm'] = lang('Dominica','');
	$countryCodes['do'] = lang('Dominican Republic','');
	$countryCodes['dz'] = lang('Algeria','');
	$countryCodes['ec'] = lang('Ecuador','');
	$countryCodes['ee'] = lang('Estonia','');
	$countryCodes['eg'] = lang('Egypt','');
	$countryCodes['eh'] = lang('Western Sahara','');
	$countryCodes['er'] = lang('Eritrea','');
	$countryCodes['es'] = lang('Spain','');
	$countryCodes['et'] = lang('Ethiopia','');
	$countryCodes['fi'] = lang('Finland','');
	$countryCodes['fj'] = lang('Fiji','');
	$countryCodes['fk'] = lang('Falkland Islands','');
	$countryCodes['fm'] = lang('Micronesia','');
	$countryCodes['fo'] = lang('Faroe Islands','');
	$countryCodes['fr'] = lang('France','');
	$countryCodes['ga'] = lang('Gabon','');
	$countryCodes['gb'] = lang('United Kingdom','');
	$countryCodes['gd'] = lang('Grenada','');
	$countryCodes['ge'] = lang('Georgia','');
	$countryCodes['gf'] = lang('French Guiana','');
	$countryCodes['gg'] = lang('Guernsey','');
	$countryCodes['gh'] = lang('Ghana','');
	$countryCodes['gi'] = lang('Gibraltar','');
	$countryCodes['gl'] = lang('Greenland','');
	$countryCodes['gm'] = lang('Gambia','');
	$countryCodes['gn'] = lang('Guinea','');
	$countryCodes['gp'] = lang('Guadeloupe','');
	$countryCodes['gq'] = lang('Equatorial Guinea','');
	$countryCodes['gr'] = lang('Greece','');
	$countryCodes['gs'] = lang('South Georgia','');
	$countryCodes['gt'] = lang('Guatemala','');
	$countryCodes['gu'] = lang('Guam','');
	$countryCodes['gw'] = lang('Guinea Bissau','');
	$countryCodes['gy'] = lang('Guyana','');
	$countryCodes['hk'] = lang('Hong Kong','');
	$countryCodes['hn'] = lang('Honduras','');
	$countryCodes['hr'] = lang('Croatia','');
	$countryCodes['ht'] = lang('Haiti','');
	$countryCodes['hu'] = lang('Hungary','');
	$countryCodes['ch'] = lang('Switzerland','');
	$countryCodes['id'] = lang('Indonesia','');
	$countryCodes['ie'] = lang('Ireland','');
	$countryCodes['il'] = lang('Israel','');
	$countryCodes['im'] = lang('Isle of Man','');
	$countryCodes['in'] = lang('India','');
	$countryCodes['io'] = lang('British Indian Ocean Territory','');
	$countryCodes['iq'] = lang('Iraq','');
	$countryCodes['ir'] = lang('Iran','');
	$countryCodes['is'] = lang('Iceland','');
	$countryCodes['it'] = lang('Italy','');
	$countryCodes['je'] = lang('Jersey','');
	$countryCodes['jm'] = lang('Jamaica','');
	$countryCodes['jo'] = lang('Jordan','');
	$countryCodes['jp'] = lang('Japan','');
	$countryCodes['ke'] = lang('Kenya','');
	$countryCodes['kg'] = lang('Kyrgyzstan','');
	$countryCodes['kh'] = lang('Cambodia','');
	$countryCodes['ki'] = lang('Kiribati','');
	$countryCodes['km'] = lang('Comoros','');
	$countryCodes['kn'] = lang('Saint Kitts And Nevis','');
	$countryCodes['kp'] = lang('North Korea','');
	$countryCodes['kr'] = lang('South Korea','');
	$countryCodes['kw'] = lang('Kuwait','');
	$countryCodes['ky'] = lang('Cayman Islands','');
	$countryCodes['kz'] = lang('Kazakhstan','');
	$countryCodes['la'] = lang('Laos','');
	$countryCodes['lb'] = lang('Lebanon','');
	$countryCodes['lc'] = lang('Saint Lucia','');
	$countryCodes['li'] = lang('Liechtenstein','');
	$countryCodes['lk'] = lang('Sri Lanka','');
	$countryCodes['lr'] = lang('Liberia','');
	$countryCodes['ls'] = lang('Lesotho','');
	$countryCodes['lt'] = lang('Lithuania','');
	$countryCodes['lu'] = lang('Luxembourg','');
	$countryCodes['lv'] = lang('Latvia','');
	$countryCodes['ly'] = lang('Libya','');
	$countryCodes['ma'] = lang('Morocco','');
	$countryCodes['mc'] = lang('Monaco','');
	$countryCodes['md'] = lang('Moldova','');
	$countryCodes['me'] = lang('Montenegro','');
	$countryCodes['mg'] = lang('Madagascar','');
	$countryCodes['mh'] = lang('Marshall Islands','');
	$countryCodes['mk'] = lang('Macedonia','');
	$countryCodes['ml'] = lang('Mali','');
	$countryCodes['mm'] = lang('Myanmar','');
	$countryCodes['mn'] = lang('Mongolia','');
	$countryCodes['mo'] = lang('Macao','');
	$countryCodes['mp'] = lang('Northern Mariana Islands','');
	$countryCodes['mq'] = lang('Martinique','');
	$countryCodes['mr'] = lang('Mauritania','');
	$countryCodes['ms'] = lang('Montserrat','');
	$countryCodes['mt'] = lang('Malta','');
	$countryCodes['mu'] = lang('Mauritius','');
	$countryCodes['mv'] = lang('Maldives','');
	$countryCodes['mw'] = lang('Malawi','');
	$countryCodes['mx'] = lang('Mexico','');
	$countryCodes['my'] = lang('Malaysia','');
	$countryCodes['mz'] = lang('Mozambique','');
	$countryCodes['na'] = lang('Namibia','');
	$countryCodes['nc'] = lang('New Caledonia','');
	$countryCodes['ne'] = lang('Niger','');
	$countryCodes['nf'] = lang('Norfolk Island','');
	$countryCodes['ng'] = lang('Nigeria','');
	$countryCodes['ni'] = lang('Nicaragua','');
	$countryCodes['nl'] = lang('Netherlands','');
	$countryCodes['no'] = lang('Norway','');
	$countryCodes['np'] = lang('Nepal','');
	$countryCodes['nr'] = lang('Nauru','');
	$countryCodes['nu'] = lang('Niue','');
	$countryCodes['nz'] = lang('New Zealand','');
	$countryCodes['om'] = lang('Oman','');
	$countryCodes['pa'] = lang('Panama','');
	$countryCodes['pe'] = lang('Peru','');
	$countryCodes['pf'] = lang('French Polynesia','');
	$countryCodes['pg'] = lang('Papua New Guinea','');
	$countryCodes['ph'] = lang('Philippines','');
	$countryCodes['pk'] = lang('Pakistan','');
	$countryCodes['pl'] = lang('Poland','');
	$countryCodes['pm'] = lang('Saint Pierre And Miquelon','');
	$countryCodes['pn'] = lang('Pitcairn','');
	$countryCodes['pr'] = lang('Puerto Rico','');
	$countryCodes['ps'] = lang('Palestine','');
	$countryCodes['pt'] = lang('Portugal','');
	$countryCodes['pw'] = lang('Palau','');
	$countryCodes['py'] = lang('Paraguay','');
	$countryCodes['qa'] = lang('Qatar','');
	$countryCodes['re'] = lang('Reunion','');
	$countryCodes['ro'] = lang('Romania','');
	$countryCodes['rs'] = lang('Serbia','');
	$countryCodes['ru'] = lang('Russia','');
	$countryCodes['rw'] = lang('Rwanda','');
	$countryCodes['sa'] = lang('Saudi Arabia','');
	$countryCodes['sb'] = lang('Solomon Islands','');
	$countryCodes['sc'] = lang('Seychelles','');
	$countryCodes['sd'] = lang('Sudan','');
	$countryCodes['se'] = lang('Sweden','');
	$countryCodes['sg'] = lang('Singapore','');
	$countryCodes['sh'] = lang('Saint Helena','');
	$countryCodes['si'] = lang('Slovenia','');
	$countryCodes['sk'] = lang('Slovakia','');
	$countryCodes['sl'] = lang('Sierra Leone','');
	$countryCodes['sm'] = lang('San Marino','');
	$countryCodes['sn'] = lang('Senegal','');
	$countryCodes['so'] = lang('Somalia','');
	$countryCodes['sr'] = lang('Suriname','');
	$countryCodes['ss'] = lang('South Sudan','');
	$countryCodes['st'] = lang('Sao Tome and Principe','');
	$countryCodes['sv'] = lang('El Salvador','');
	$countryCodes['sy'] = lang('Syria','');
	$countryCodes['sz'] = lang('Swaziland','');
	$countryCodes['tc'] = lang('Turks and Caicos Islands','');
	$countryCodes['td'] = lang('Chad','');
	$countryCodes['tf'] = lang('French Southern Territories','');
	$countryCodes['tg'] = lang('Togo','');
	$countryCodes['th'] = lang('Thailand','');
	$countryCodes['tj'] = lang('Tajikistan','');
	$countryCodes['tk'] = lang('Tokelau','');
	$countryCodes['tl'] = lang('Timor Leste','');
	$countryCodes['tm'] = lang('Turkmenistan','');
	$countryCodes['tn'] = lang('Tunisia','');
	$countryCodes['to'] = lang('Tonga','');
	$countryCodes['tr'] = lang('Turkey','');
	$countryCodes['tt'] = lang('Trinidad and Tobago','');
	$countryCodes['tv'] = lang('Tuvalu','');
	$countryCodes['tw'] = lang('Taiwan','');
	$countryCodes['tz'] = lang('Tanzania','');
	$countryCodes['ua'] = lang('Ukraine','');
	$countryCodes['ug'] = lang('Uganda','');
	$countryCodes['us'] = lang('USA','');
	$countryCodes['uy'] = lang('Uruguay','');
	$countryCodes['uz'] = lang('Uzbekistan','');
	$countryCodes['va'] = lang('Vatican','');
	$countryCodes['vc'] = lang('Saint Vincent And The Grenadines','');
	$countryCodes['ve'] = lang('Venezuela','');
	$countryCodes['vg'] = lang('British Virgin Islands','');
	$countryCodes['vn'] = lang('Vietnam','');
	$countryCodes['vu'] = lang('Vanuatu','');
	$countryCodes['wf'] = lang('Wallis and Futuna','');
	$countryCodes['ws'] = lang('Samoa','');
	$countryCodes['ye'] = lang('Yemen','');
	$countryCodes['yt'] = lang('Mayotte','');
	$countryCodes['za'] = lang('South Africa','');
	$countryCodes['zm'] = lang('Zambia','');
	$countryCodes['zw'] = lang('Zimbabwe','');

	$metarCountries = array();

	$myfile = fopen("stations.txt", "r") or die("Unable to open file!");
	while(!feof($myfile)) {
		$string = fgets($myfile);
		if(substr($string,81,2)!=""){
			array_push($metarCountries,substr($string,81,2));
		}
	}
	$metarCountries = array_unique($metarCountries);
	$metarCountries = array_values($metarCountries);
	sort($metarCountries);
	$countryNames = array();
	for($i=0;$i<count($metarCountries);$i++){
		array_push($countryNames,$countryCodes[strtolower($metarCountries[$i])]);
	}
	sort($countryNames);

	$countryCodesFliped = array_flip($countryCodes);
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $pageName?></title>
		<?php metaHeader()?>
		<style>
			#mainMetar{
				width: 80%;
				margin-left: auto;
				margin-right: auto;
				border: 2px solid #<?php echo $color_schemes[$design2]['900']?>;
			}
			#divForm{
				width: 80%;
				margin-left: auto;
				margin-right: auto;
			}
		</style>
	</head>
	<body onload="loadContent('<?php echo $stationMETAR?>')">
		<div id="main_top">
			<?php bodyHeader();?>
			<?php include("../../menu.php")?>
		</div>
		<div id="main">
			<br><br>
			<div id="mainMetar">
			</div>
			<br>
			<div id="divForm">
				<table>
					<tr>
						<td>
							<select id="countryList" class="button" onchange="countrySelected()">
								<option value="" selected>
									<?php echo lang("select country",'c')?>
								</option>
								<?php
									for($i=0;$i<count($countryNames);$i++){
										echo "<option value='".$countryCodesFliped[$countryNames[$i]]."'>".$countryNames[$i]."</option>";
									}
								?>
							</select>
						</td>
						<td>
							<div id="countryDetailsDiv"></div>
						</td>
					</tr>
				</table>
			</div>	
		</div>
		<?php include("../../footer.php")?>
		<script>
			function loadContent(id){
				$("#mainMetar").load("metarAjax.php?id="+id);
			}
			function countrySelected(){
				selected = $("#countryList").val();
				$("#countryDetailsDiv").load("countrySelect.php?country="+selected);
			}
			function loadNew(){
				newID = $("#countryPlaces").val();
				loadContent(newID);
			}
		</script>
	</body>
</html>
	