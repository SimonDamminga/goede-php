<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="klok.png" type="image/png" sizes="128x128">
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<title>Hoe laat is het?</title>
</head>
<body id="background">
<script type="text/javascript">
	var timeout = setTimeout(reload, 1000);
	function reload(){
		$("#reload").load('index.php #reload', function(){
			timeout = setTimeout(reload, 1000);
		});
	}
</script>
<div id="reload">
	<?php 
		date_default_timezone_set('Europe/Amsterdam');
		$time = date("H:i:s");
		$text = "";
		echo "<br>";
		if($time >= "06:00" and $time < "12:00"){
			$text = "Goede morgen!";
			echo "<h1>$text</h1><p>Het is nu $time uur</p>";
			echo "<style>#background{background-image: url(backgrounds/morning.png); background-attachment: fixed; background-size: cover;}</style>";
		}elseif($time >= "12:00" and $time < "18:00"){
			$text = "Goede middag!";
			echo "<h1>$text</h1><p>Het is nu $time uur</p>";
			echo "<style>#background{background-image: url(backgrounds/afternoon.png);}</style>";
		}elseif($time >= "18:00" and $time < "24:00"){
			$text = "Goede avond!";
			echo "<h1>$text</h1><p>Het is nu $time uur</p>";
			echo "<style>#background{background-image: url(backgrounds/evening.png);}</style>";
		}elseif($time >= "00:00" and $time < "06:00"){
			$text = "Slaap lekker!";
			echo "<h1>$text</h1><p>Het is nu $time uur</p>";
			echo "<style>#background{background-image: url(backgrounds/night.png);}</style>";
		}
	 ?>
 </div>
</body>
</html>