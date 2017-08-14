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
array('label'=>'temperature1','type'=>'number')); 

$sql = "SELECT date_time as time ,temperature1 as temperature FROM weather order by id desc limit 100"; 												
$result = mysqli_query($conn, $sql); 										
$rows = array();															

while($row = mysqli_fetch_assoc($result)) 									
{
$temp=array();									
$temp[] = array('v'=>(string)$row['time']);		
$temp[] = array('v'=>(float)$row['temperature']);
$rows[]=array('c'=>$temp);
}
$table['rows'] = $rows;

echo json_encode($table,JSON_PRETTY_PRINT);													
mysqli_close($conn);
?>
