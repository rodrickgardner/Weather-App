<!DOCTYPE html>
<html>
<head><title>Weather Report Using API</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.csss"></script>

</head>

<body>

<center>
<strong><h6>
	<a href="https://youtu.be/ZdYVC3tDkbk" target="_blank" class="btn btn-success my-2 my-sm-0">App Documentation</a> ||
	<a href="https://www.github.com/rodrickgardner" target="_blank" class="btn btn-success my-2 my-sm-0" >Github Portfolio</a> 
	
</h6></strong>
	</center>
	<center><br><br>
		<form method="GET" action="get.php">
		<h1>Simple Weather<strong> App</strong> </h1><br>
		<h3>Type Your City </h3>
		<br><p><strong>For Example: Nairobi</strong></p>
			<input type="text" style="height:36px;font-size:14pt;" name="q" required placeholder="Enter city here...">
			<input type="submit" name="submit"class="btn btn-primary my-2 my-sm-0">
			<input type="reset" name="reset" class="btn btn-secondary my-2 my-sm-0">
		</form><br>
		<!--<div>
			<img src="./images/weather.png" width="350" height="100">
		</div>--!>
	</center>
	<br><br><br><br><br><br><br><br><br>
	<footer id="footer" class="text text-center">
	<p>Copyright &copy Rodrixxx 2020 Simple Weather App </p>
</footer>
</body>
</html>