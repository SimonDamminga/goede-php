<?php 
		date_default_timezone_set('Europe/Amsterdam');
		$time = date("H:i");
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
		}elseif ($time >= "18:00" and $time < "00:00") {
			$text = "Goede avond!";
			echo "<h1>$text</h1><p>Het is nu $time uur</p>";
			echo "<style>#background{background-image: url(backgrounds/evening.png);}</style>";
		}elseif ($time >= "00:00" and $time < "06:00") {
			$text = "Slaap lekker!";
			echo "<h1>$text</h1><p>Het is nu $time uur</p>";
			echo "<style>#background{background-image: url(backgrounds/night.png);}</style>";
		}
	 ?>