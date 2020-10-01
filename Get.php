<html>
<head><title>Weather Report using <?php echo $_GET['q']; ?> Weather API</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.csss"></script>

</head>
<style>
html, body, h1, h2, h3, h4, h5, h6 {
  font-family: "Comic Sans MS", cursive, sans-serif;
}
</style>
<body>




<?php
error_reporting(0);
$get = json_decode(file_get_contents('http://ip-api.com/json/'),true);


date_default_timezone_set($get['timezone']);
$city = $_GET['q'];
 $string = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&appid=ebcf5230b3446f334fe3fa2fd2d4ce24";
 $data = json_decode(file_get_contents($string),true);
 
 $temp = $data['main']['temp'];
 
 $icon = $data['weather'][0]['icon'];


 $visibility = $data['visibility'];
 $visibilitykm = $visibility / 1000;
 $country =  "<h1 class='w3-xxxlarge w3-animate-zoom'><b>".$data['name'].",".$data['sys']['country']."</h1></b>";
 
 $logo = "<center><img src='http://openweathermap.org/img/w/".$icon.".png'></center>";
 $desc = "<b><p>".$data['weather'][0]['description']."</p></b>";
 
 $temperature =  "<b>Temp:".$temp."°C</b><br>";
 $clouds = "<b>Clouds:".$data['clouds']['all']."%</b><br>";
 $humidity = "<b>Humidity:".$data['main']['humidity']."%</b><br>";
 $windspeed = "<b>Wind Speed:".$data['wind']['speed']."m/s</b><br>";
 $pressure = "<b>Pressure:".$data['main']['pressure']."hpa</b><br>";
 $visibility =  "<b>Visibility:".$visibilitykm."Km</b><br>";
 $sunrise = "<b>Sunrise:".date('h:i A', $data['sys']['sunrise'])."</b><br>";
 $sunset = "<b>Sunset:".date('h:i A', $data['sys']['sunset'])."</b>";

 

 
?>

	<div class="w3-display-container w3-wide">
		<img src="http://www.designbolts.com/wp-content/uploads/2014/03/Blue-Blur-Background1.jpg" style="width:100%;height:100%;" class="w3-image">
		  <div class="w3-display-topmiddle w3-margin-top">
			
				<?php 
				echo $country;
				echo $logo; 
				echo "<center><h2>".$desc."</h1></center>";
				?>
				
		  </div>
	
	
	<div class="w3-display-middle w3-margin-top w3-padding-top">
		<div class="w3-animate-left w3-margin-top"><br><br><br>
<h1 class="w3-xlarge">

			<?php echo $temperature; ?>
			<?php echo $clouds; ?>
			<?php echo $humidity; ?>
			<?php echo $$windspeed; ?>
			<?php echo $pressure; ?>
			<?php echo $$visibility; ?>
			<?php echo $sunrise; ?>
			<?php echo $sunset; ?>
			</h2>
		</div>
		<form>
 			<input type="button"class="btn btn-primary my-2 my-sm-0" value="Go back!" onclick="history.back()">

		</form>
	</div>
</body>
</html>