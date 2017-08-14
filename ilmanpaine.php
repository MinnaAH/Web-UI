<?php
require_once 'conf.php';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) 
{
    die("Virhe yhteydessä: " . mysqli_connect_error());
}
$table = array();	
$table['cols'] = array(						
array('label' => 'Aika', 'type'=>'string'),
array('label'=>'Ilmanpaine','type'=>'number')); 

$sql = "SELECT date_time as Aika ,pressure1 as Ilmanpaine FROM weather order by id desc limit 20"; 												
$result = mysqli_query($conn, $sql); 					

$rows = array();															

while($row = mysqli_fetch_assoc($result)) 									
{
$temp=array();									
$temp[] = array('v'=>(string)$row['Aika']);		
$temp[] = array('v'=>(float)$row['Ilmanpaine']);
$rows[]=array('c'=>$temp);
}
$table['rows'] = $rows;		

echo json_encode($table,JSON_PRETTY_PRINT);												
mysqli_close($conn);
?>
