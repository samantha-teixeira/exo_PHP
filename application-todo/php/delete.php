<?php

$mysqli = mysqli_connect("localhost", "webclient", "pass1234", "todo");

if (isset($_GET["id"])){
    $deleteTarget = $_GET["id"];
    mysqli_query($mysqli, "DELETE FROM todolist WHERE id=$deleteTarget");
    echo "{delete id numero :".$deleteTarget."}";

}


?>