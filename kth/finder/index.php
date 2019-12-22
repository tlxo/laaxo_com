<html>

	<head>

		<title>KTH Classroom Finder</title>

		<link rel="stylesheet" type="text/css" href="style.css" />
		<meta name="viewport" content="width=device-width, user-scalable=no" />

		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-4854739-9']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>

	</head>

	<body>

		<form method="GET" action="index.php">
		<input type="search" class="text" name="user_room" id="searchbox" placeholder="Please insert a classroom code.">
		<input type="submit" class="button" id="find" value="Find">
		</FORM>

	<?php
		$room = array(
		"A1" => "&Ouml;stermalmsgatan 26", 
		"A3" => "&Ouml;stermalmsgatan 26",
		"A4" => "&Ouml;stermalmsgatan 26", 
		"A7" => "&Ouml;stermalmsgatan 26",  
		"A2" => "&Ouml;stermalmsgatan 26",
		"A5" => "&Ouml;stermalmsgatan 26",
		"A6" => "&Ouml;stermalmsgatan 26",  
		"B1" => "Brinellv&auml;gen 23",
		"B2" => "Brinellv&auml;gen 23",
		"B3" => "Brinellv&auml;gen 23",  
		"B22" => "Brinellv&auml;gen 23",
		"B23" => "Brinellv&auml;gen 23",
		"B24" => "Brinellv&auml;gen 23",
		"B25" => "Brinellv&auml;gen 23",
		"B26" => "Brinellv&auml;gen 23", 
		"D1" => "Lindstedtsv&auml;gen 17",  
		"D2" => "Lindstedtsv&auml;gen 5",
		"D3" => "Lindstedtsv&auml;gen 5",  
		"D31" => "Lindstedtsv&auml;gen 5",
		"D32" => "Lindstedtsv&auml;gen 5",
		"D33" => "Lindstedtsv&auml;gen 5",
		"D34" => "Lindstedtsv&auml;gen 5", 
		"D35" => "Lindstedtsv&auml;gen 17",
		"D41" => "Lindstedtsv&auml;gen 17",  
		"D42" => "Lindstedtsv&auml;gen 17",  
		"E3" => "Osquars backe 14",  
		"E1" => "Lindstedtsv&auml;gen 3",
		"E2" => "Lindstedtsv&auml;gen 3",  
		"E31" => "Osquars backe 2",
		"E32" => "Osquars backe 2",
		"E33" => "Osquars backe 2",
		"E34" => "Osquars backe 2",
		"E35" => "Osquars backe 2",
		"E36" => "Osquars backe 2",  
		"E51" => "Osquars backe 14",
		"E52" => "Osquars backe 14",
		"E53" => "Osquars backe 14",  
		"F1" => "Lindstedtsv&auml;gen 22",  
		"F2" => "Lindstedtsv&auml;gen 28",  
		"F3" => "Lindstedtsv&auml;gen 26",  
		"FA31" => "Roslagstullsbacken 21",
		"FA32" => "Roslagstullsbacken 21",
		"FB41" => "Roslagstullsbacken 21",
		"FB42" => "Roslagstullsbacken 21",
		"FB51" => "Roslagstullsbacken 21",
		"FB52" => "Roslagstullsbacken 21",
		"FB53" => "Roslagstullsbacken 21",
		"FB54" => "Roslagstullsbacken 21",
		"FB55" => "Roslagstullsbacken 21",  
		"FD51" => "Roslagstullsbacken 21",
		"FP41" => "Roslagstullsbacken 21",
		"H1" => "Teknikringen 33",  
		"H21" => "Teknikringen 33",  
		"K1" => "Teknikringen 56",  
		"K2" => "Teknikringen 28",  
		"K51" => "Teknikringen 28",
		"K52" => "Teknikringen 28",
		"K53" => "Teknikringen 28",  
		"L1" => "Drottning Kristinas v&auml;g 30",  
		"L12" => "Drottning Kristinas v&auml;g 30",
		"L21" => "Drottning Kristinas v&auml;g 30",
		"L22" => "Drottning Kristinas v&auml;g 30",
		"L31" => "Drottning Kristinas v&auml;g 30",
		"L41" => "Drottning Kristinas v&auml;g 30",
		"L42" => "Drottning Kristinas v&auml;g 30",
		"L43" => "Drottning Kristinas v&auml;g 30",
		"L44" => "Drottning Kristinas v&auml;g 30",
		"L51" => "Drottning Kristinas v&auml;g 30",
		"L52" => "Drottning Kristinas v&auml;g 30",
		"M1" => "Brinellv&auml;gen 64",
		"M2" => "Brinellv&auml;gen 64",
		"M3" => "Brinellv&auml;gen 64",  
		"M21" => "Brinellv&auml;gen 64",
		"M22" => "Brinellv&auml;gen 64",
		"M23" => "Brinellv&auml;gen 64",
		"M24" => "Brinellv&auml;gen 64",
		"M31" => "Brinellv&auml;gen 64",
		"M32" => "Brinellv&auml;gen 64",
		"M33" => "Brinellv&auml;gen 64",
		"M34" => "Brinellv&auml;gen 64",
		"M35" => "Brinellv&auml;gen 64",
		"M36" => "Brinellv&auml;gen 64",
		"M37" => "Brinellv&auml;gen 64",
		"M38" => "Brinellv&auml;gen 64",  
		"Q1" => "Osquldas v&auml;g 4",  
		"Q11" => "Osquldas v&auml;g 6",
		"Q12" => "Osquldas v&auml;g 6",
		"Q13" => "Osquldas v&auml;g 6",
		"Q14" => "Osquldas v&auml;g 6",
		"Q15" => "Osquldas v&auml;g 6",
		"Q21" => "Osquldas v&auml;g 6",
		"Q22" => "Osquldas v&auml;g 6",
		"Q23" => "Osquldas v&auml;g 6",
		"Q24" => "Osquldas v&auml;g 6",
		"Q25" => "Osquldas v&auml;g 6",
		"Q31" => "Osquldas v&auml;g 6",
		"Q32" => "Osquldas v&auml;g 6",
		"Q33" => "Osquldas v&auml;g 6",
		"Q34" => "Osquldas v&auml;g 6",
		"Q35" => "Osquldas v&auml;g 6",
		"Q36" => "Osquldas v&auml;g 6",  
		"Q2" => "Osquldas v&auml;g 10",  
		"V34" => "Teknikringen 76",
		"V35" => "Teknikringen 76",  
		"V01" => "Teknikringen 72",
		"V11" => "Teknikringen 72",
		"V21" => "Teknikringen 72",
		"V22" => "Teknikringen 72",
		"V23" => "Teknikringen 72",
		"V32" => "Teknikringen 72",
		"V33" => "Teknikringen 72",  
		"V1" => "Teknikringen 76",
		"V2" => "Teknikringen 76",  
		"V3" => "Teknikringen 72");
		
		$input=strtoupper($_GET['user_room']);
		$input=str_replace(" ", "", $input);
		$address=$room[$input];
		
		$google=urlencode($address);

		if ($address) {
			
			echo "<p>The room <strong>{$input}</strong> is at <strong>{$address}</strong>.</p>";
			echo "<img src='http://maps.googleapis.com/maps/api/staticmap?visible=Tekniska+Hogskolan+T-bana&markers={$google},Stockholm&zoom=15&size=300x300&sensor=false'>";

		} else {
			echo "<img src='http://maps.googleapis.com/maps/api/staticmap?visible=Tekniska+Hogskolan+T-bana,Stockholm&zoom=15&size=300x300&sensor=false'>";
		}

		?>

	</body>

</html>
