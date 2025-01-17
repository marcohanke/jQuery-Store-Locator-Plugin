<?php

// You'll likely pass the data string from a query, etc - this is just a very basic example to show how it works
$data = '<?xml version="1.0" encoding="utf-8"?>
<markers>
	<marker name="Chipotle Minneapolis" lat="44.947464" lng="-93.320826" category="Restaurant" address="3040 Excelsior Blvd" address2="" city="Minneapolis" state="MN" postal="55416" country="US" phone="612-922-6662" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="" />
	<marker name="Chipotle St. Louis Park" lat="44.930810" lng="-93.347877" category="Restaurant" address="5480 Excelsior Blvd." address2="" city="St. Louis Park" state="MN" postal="55416" country="US" phone="952-922-1970" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Online Ordering " />
	<marker name="Chipotle Minneapolis" lat="44.9553438" lng="-93.29719699999998" category="Restaurant, Bar" address="2600 Hennepin Ave." address2="" city="Minneapolis" state="MN" postal="55404" country="US" phone="612-377-6035" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="true" features="Online Ordering, Fresh Guacamole" />
	<marker name="Chipotle Golden Valley" lat="44.983935" lng="-93.380542" category="Restaurant" address="515 Winnetka Ave. N" address2="" city="Golden Valley" state="MN" postal="55427" country="US" phone="763-544-2530" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Online Ordering" />
	<marker name="Chipotle Hopkins" lat="44.924363" lng="-93.410158" category="Cafe" address="786 Mainstreet" address2="" city="Hopkins" state="MN" postal="55343" country="US" phone="952-935-0044" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Margaritas" />
	<marker name="Chipotle Minneapolis" lat="44.973557" lng="-93.275111" category="Restaurant" address="1040 Nicollet Ave" address2="" city="Minneapolis" state="MN" postal="55403" country="US" phone="612-659-7955" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Online Ordering, Margaritas" />
	<marker name="Chipotle Minneapolis" lat="44.97774" lng="-93.270909" category="Restaurant, Cafe" address="50 South 6th" address2="" city="Minneapolis" state="MN" postal="55402" country="US" phone="612-333-0434" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Fresh Guacamole" />
	<marker name="Chipotle Edina" lat="44.879826" lng="-93.321280" category="Restaurant" address="6801 York Avenue South" address2="" city="Edina" state="MN" postal="55435" country="US" phone="952-926-6651" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Online Ordering, Fresh Guacamole" />
	<marker name="Chipotle Minnetonka" lat="44.970495" lng="-93.437430" category="Restaurant" address="12509 Wayzata Blvd" address2="" city="Minnetonka" state="MN" postal="55305" country="US" phone="952-252-4900" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Margaritas" />
	<marker name="Chipotle Minneapolis" lat="44.972808" lng="-93.247153" category="Restaurant, Coffee" address="229 Cedar Ave S" address2="" city="Minneapolis" state="MN" postal="55454" country="US" phone="612-659-7830" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="" />
	<marker name="Chipotle Minneapolis" lat="44.987687" lng="-93.257581" category="Restaurant" address="225 Hennepin Ave E" address2="" city="Minneapolis" state="MN" postal="55414" country="US" phone="612-331-6330" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Fresh Guacamole" />
	<marker name="Chipotle Minneapolis" lat="44.973665" lng="-93.227023" category="Restaurant" address="800 Washington Ave SE" address2="" city="Minneapolis" state="MN" postal="55414" country="US" phone="612-378-7078" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="" />
	<marker name="Chipotle Bloomington" lat="44.8458631" lng="-93.2860161" category="Restaurant" address="322 South Ave" address2="" city="Bloomington" state="MN" postal="55425" country="US" phone="952-252-3800" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Online Ordering" />
	<marker name="Chipotle Wayzata" lat="44.9716626" lng="-93.4967757" category="Restaurant" address="1313 Wayzata Blvd" address2="" city="Wayzata" state="MN" postal="55391" country="US" phone="952-473-7100" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Margaritas" />
	<marker name="Chipotle Eden Prairie" lat="44.859761" lng="-93.436379" category="Restaurant, Bar" address="13250 Technology Dr" address2="" city="Eden Prairie" state="MN" postal="55344" country="US" phone="952-934-5955" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Online Ordering" />
	<marker name="Chipotle Plymouth" lat="45.019846" lng="-93.481832" category="Restaurant" address="3425 Vicksburg Lane N" address2="" city="Plymouth" state="MN" postal="55447" country="US" phone="763-519-0063" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Online Ordering, Fresh Guacamole" />
	<marker name="Chipotle Roseville" lat="44.998965" lng="-93.194622" category="Restaurant, Coffee" address="860 Rosedale Center Plaza" address2="" city="Roseville" state="MN" postal="55113" country="US" phone="651-633-2300" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="" />
	<marker name="Chipotle St. Paul" lat="44.939865" lng="-93.136768" category="Restaurant, Bakery" address="867 Grand Ave" address2="" city="St. Paul" state="MN" postal="55105" country="US" phone="651-602-0560" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="" />
	<marker name="Chipotle Chanhassen" lat="44.858736" lng="-93.533661" category="Restaurant, Bar" address="560 W 79th" address2="" city="Chanhassen" state="MN" postal="55317" country="US" phone="952-294-0301" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Online Ordering, Fresh Guacamole" />
	<marker name="Chipotle St. Paul" lat="44.945127" lng="-93.095368" category="Restaurant, Coffee" address="29 5th St West" address2="" city="St. Paul" state="MN" postal="55102" country="US" phone="651-291-5411" email="info@chipotle.com" web="http://www.chipotle.com" hours1="Mon-Sun 11am-10pm" hours2="" hours3="" featured="" features="Fresh Guacamole" />
</markers>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Map Example - Raw Data</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/css/storelocator.css" />
</head>

<body>

<div class="bh-sl-container">
	<div id="page-header">
		<h1 class="bh-sl-title">Using Chipotle as an Example</h1>
		<p>I used locations around Minneapolis and the southwest suburbs. So, for example, Edina, Plymouth, Eden Prarie, etc. would be good for testing the functionality.
			You can use just the city as the address - ex: Edina, MN.</p>
	</div>

	<div class="bh-sl-form-container">
		<form id="bh-sl-user-location" method="post" action="#">
			<div class="form-input">
				<label for="bh-sl-address">Enter Address or Zip Code:</label>
				<input type="text" id="bh-sl-address" name="bh-sl-address" />
			</div>

			<button id="bh-sl-submit" type="submit">Search</button>
		</form>
	</div>

	<div id="bh-sl-map-container" class="bh-sl-map-container">
		<div id="bh-sl-map" class="bh-sl-map"></div>
		<div class="bh-sl-loc-list">
			<ul class="list"></ul>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="assets/js/libs/handlebars.min.js"></script>
<script src="https://maps.google.com/maps/api/js?callback=Function.prototype"></script>
<script src="assets/js/plugins/storeLocator/jquery.storelocator.js"></script>
<script>
	$(function() {
		$('#bh-sl-map-container').storeLocator({
			dataRaw: <?php echo json_encode($data); ?>,
            dataType: 'xml'
		});
	});
</script>

</body>
</html>
