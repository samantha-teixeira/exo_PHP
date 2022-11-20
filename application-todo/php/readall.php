<?php

$mysqli = mysqli_connect("localhost", "webclient", "pass1234", "todo");

$sql = "SELECT*FROM todolist ORDER BY id DESC";
$result = mysqli_query($mysqli, $sql);

$together = mysqli_fetch_all($result, MYSQLI_ASSOC); //transforme la donnée en un tableau associatif; ["id"=>"1","content"=>"blablabla"] (donnée php)
$jsonall = json_encode($together); //transforme la donnée en objet JSON {"id":1,"content":"blablabla} (donnée JS)
echo $jsonall;

?>