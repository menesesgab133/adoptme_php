<?php 

$con = new PDO('mysql:host=localhost;dbname=dogs', 'root', '');


$query = $con->prepare("SELECT * FROM dogs");
$query->execute();

?>

