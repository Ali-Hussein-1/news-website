<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');

include("connections.php");

$id = $_POST["id"];

$query = $mysqli->prepare("SELECT text, img , title , date FROM articles WHERE articles.id = ?");
$query->bind_param("i", $id);
$query->execute();

$return = $query -> get_result();
$result = $return -> fetch_assoc();

echo json_encode($result);

?>