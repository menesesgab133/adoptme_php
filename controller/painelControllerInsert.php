<?php 
$con = new PDO('mysql:host=localhost;dbname=dogs', 'root', '');

$raca = filter_input(INPUT_POST, 'raca');
$descricao = filter_input(INPUT_POST, 'descricacao');
$link = filter_input(INPUT_POST, 'link');

if($raca && $descricao && $link) {
    $q = "INSERT INTO dogs VALUES (null, :raca, :descricacao, :link)";
    $query = $con->prepare($q);
    $query->bindParam(':raca', $_POST['raca'], PDO::PARAM_STR);
    $query->bindParam(':descricacao', $_POST['descricacao'], PDO::PARAM_STR);
    $query->bindParam(':link', $_POST['link'], PDO::PARAM_STR);
    $query->execute();
}

header('Location://localhost/adoptme_php/index.php');
?>