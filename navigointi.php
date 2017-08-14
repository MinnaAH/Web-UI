<html>
  <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	  <li class="active"><a href="harkka.php?action=home">Etusivu</a></li>
        <li><a  href="harkka.php?action=table">Taulukko</a></li>
        <li><a  href="harkka.php?action=wind_speed">Tuulen nopeus(JSON)</a></li> 
		<li><a  href="harkka.php?action=wind_speed2">Tuulen nopeus</a></li> 
		<li><a  href="harkka.php?action=temperature">Lämpötila (JSON)</a></li>
		<li><a  href="harkka.php?action=temperature2">Lämpötila</a></li> 
		<li><a  href="harkka.php?action=pressure">Ilmanpaine</a></li> 
		<li><a  href="harkka.php?action=wind_direction">Tuulen suunta</a></li> 
      </ul>
    </div>
  </div>
</nav>

<div class ="container">
	<?php
		if($_REQUEST['action']=="table")
			require("table_p.php");
		
		elseif ($_REQUEST['action']=="wind_speed")
			require("wind_speed_p.php");
			
		elseif($_REQUEST['action']=="temperature")
			require("temperature_p.php");
		
		elseif($_REQUEST['action']=="pressure")
			require("pressure_p.php");
		
		elseif($_REQUEST['action']=="wind_speed2")
			require("wind_speed_p2.php");
		
		elseif($_REQUEST['action']=="temperature2")
			require("temperature_p2.php");
			elseif($_REQUEST['action']=="wind_direction")
			require("wind_direction_p.php");
			
		else
			require("home.php");
	?>
</div>

</body>
</html>
