<head>
<meta name ="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Säätiedot</title>
</head>
<tbody>
<form action="table_h.php">
<div class="table-responsive">
<table class="table table-condensed, table table-striped">
<?php
require_once 'conf.php';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) 
{
    die("Virhe yhteydessä: " . mysqli_connect_error());
}

$sql = "SELECT id as ID, date_time as Aika, temperature1 as 'Lämpötila 1', temperature2 as 'Lämpötila 2', wind_speed1 as 'Tuulen nopeus 1', wind_speed2
as 'Tuulen nopeus 2', wind_direction1 as 'Tuulensuunta 1', wind_direction2 as 'Tuulensuunta 2', pressure1 as 'Paine 1', pressure2 as 'Paine 2'
, humidity_in as 'Sisäilman kosteus', humidity_out as Ilmankosteus, light1 as 'Valoisuus 1', light2 as 'Valoisuus 2', rain1 as 'Sademäärä 1', 
rain2 as 'Sademäärä 2' FROM weather order by id desc limit 1000";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
	while($property = mysqli_fetch_field($result))
	{
		echo "<th>$property->name</th>";
	}
while ($row = mysqli_fetch_assoc($result))
{
	echo "<tr>";
	foreach ($row as $col)
	{
		echo "<td>$col</td>";
	}
	echo "</tr>\n";
}
}

else
{
	echo "Ei tulosta";
}

?>
</table>
</div>
</tbody>
