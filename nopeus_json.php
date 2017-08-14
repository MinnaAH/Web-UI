<?php
require_once 'conf.php';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) 
{
    die("Virhe yhteydessä: " . mysqli_connect_error());
}

$table = array();	
$table['cols'] = array(						
array('label' => 'Date', 'type'=>'string'),
array('label'=>'wind_speed2','type'=>'number')); 

$sql = "SELECT date_time as Aika ,wind_speed2 as Tuulennopeus FROM weather order by id desc limit 1"; 												
$result = mysqli_query($conn, $sql); 										

$rows = array();															

while($row = mysqli_fetch_assoc($result)) 									
{
$temp=array();									
$temp[] = array('v'=>(string)$row['time']);		
$temp[] = array('v'=>(float)$row['Tuulennopeus']);
$rows[]=array('c'=>$temp);
}
$table['rows'] = $rows;		

echo json_encode($table,JSON_PRETTY_PRINT);													
mysqli_close($conn);
?>
