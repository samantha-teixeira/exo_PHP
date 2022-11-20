<?php

$mysqli=mysqli_connect("localhost","webclient","pass1234","todo");

if (isset($_GET["content"]))  {
    $createContent=$_GET["content"];

    if(isset($_GET["important"])) {
       $createImportant=$_GET["important"];  
    } 
    else {
       $createImportant="false";
    }

    if(isset($_GET["date"])) {
        $createDate=$_GET["date"];    
    } 
    else {
        $createDate="null";
    }

    mysqli_query($mysqli,"INSERT INTO todolist(content,important,date) VALUES (\"$createContent\",$createImportant,$createDate)");
    echo '{"lastId":'.mysqli_insert_id($mysqli).'}';
}


?>