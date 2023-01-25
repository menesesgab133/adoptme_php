<?php
$con = new PDO('mysql:host=localhost;dbname=dogs', 'root', '');

$id = filter_input(INPUT_GET, 'id');
if($id) {
    $delete = "DELETE FROM dogs WHERE id=:id";
    $query = $con->prepare($delete);
    $query->bindValue('id', $id);
    $query->execute();
}
header('Location://localhost/adoptme_php/index.php');
?>