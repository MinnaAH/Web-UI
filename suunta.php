 <head>
<title>Tuulen suunta</title>
</head>
<div>
<h1>Tuulen suunta</h1>
</div>
 <style>
  .table {
    border-radius: 5px;
    width: 50%;
    margin: 0 auto;
    float: none;
}
p {font-size: 16px;}
  </style>
  <div class="col-sm-6">
  <p class="text-center" style="color: #000000">Tuulen suunnan arvoa kuvaava ilmansuunta </p>
  <table class="table table-condensed" style="color: #000000">
  <tr>
	<th>Arvo</th>
	<th>Ilmansuunta</th>
  </tr>
  <tr>
  <td>1</td>
  <td>Pohjoinen</td>
  </tr>
  <tr>
  <td>2</td>
  <td>Koillinen</td>
  </tr>
  <tr>
  <td>3</td>
  <td>Itä</td>
  </tr>
  <tr>
  <td>4</td>
  <td>Kaakko</td>
  </tr>
  <tr>
  <td>5</td>
  <td>Etelä</td>
  </tr>
  <tr>
  <td>6</td>
  <td>Lounas</td>
  </tr>
  <tr>
  <td>7</td>
  <td>Länsi</td>
  </tr>
  <tr>
  <td>8</td>
  <td>Luode</td>
  </tr>
  </table>
</div>

<div class="class="col-sm-4">
  <p class="text-center" style="color:#000000">Tuulen suunta reaaliajassa.</p>
  <table class="table table-condensed" style="color: #000000">
<?php
require_once 'conf.php';
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) 
{
    die("Virhe yhteydessä: " . mysqli_connect_error());
}
$sql = "SELECT date_time as Aika, wind_direction1 as 'Tuulensuunta' FROM weather order by id desc limit 1";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
	while($property = mysqli_fetch_field($result))
	{
		echo "<th>$property->name</th>";
	}
	while ($col = mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		foreach ($col as $row)
		{
			echo "<td>$row</td>";
		}
		echo "</tr>\n";
	}
}
else
	echo "Ei tulosta";
?>
</table>
</div>

