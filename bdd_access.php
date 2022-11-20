<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        li {
            display:inline-block;
            background: linear-gradient(to bottom,#ddd,#bbb);
            padding:0.25em 0.5em;
            margin-top:0.25em;
        }
        #modal{
            width:100vw;
            height:100vh;
            position:absolute;
            top:0;
            left:0;
            background-color:rgba(0,0,0,0.7);
            color:white;
        }
    </style>
</head>
<body>
    <h1>LISTE DE COURSES</h1>

    <form method="get" action="bdd_access.php">
        <input name="create" type="text"></input>
        <button type="submit">Ajouter</button>
    </form>

    <!-- <div id="modal" style="display:none">
        <div id="pseudoWindow">
            <p class="title">Saississez le nouveau label</p>
            <form action="bdd_access.php" method="get">
                <input type="text" name="update" id="newLabelInput">
                <input type="hidden" name="id" id="hiddenId" value="">
                <button type="submit">Modifier</button>
            </form>
        </div>
    </div> -->

<script>
    function updateLabel(id) {
        document.getElementById("modal").style.display="block";
        document.getElementById("hiddenId").value=id;
    }
</script>
</body>
</html>



<?php

$mysqli=mysqli_connect("localhost","webclient","pass1234","listecourses");


if(isset($_GET["delete"])){
    $deleteTarget=$_GET["delete"];
    mysqli_query($mysqli,"DELETE FROM courses WHERE id=$deleteTarget");
}

if(isset($_GET["create"])){
    $createTarget=$_GET["create"];
    mysqli_query($mysqli,"INSERT INTO courses(id,element) VALUES (0,\"$createTarget\")");
}

if(isset($_GET["update"]) && isset($_GET["id"])){
    $updateTarget=$_GET["update"];
    $id=$_GET["id"];
    mysqli_query($mysqli,"UPDATE courses SET element=\"$updateTarget\" WHERE id=$id");
}

echo '<ul>';

$result=mysqli_query($mysqli,"SELECT*FROM courses");
while ($row=mysqli_fetch_assoc($result)) {
    echo '<li>'.$row["id"]." ". $row["element"].'</li><a href="bdd_access.php?delete='.$row["id"].'"><button type="submit" class="delete"> x </button></a>';
    echo '<button onclick="updateLabel('.$row["id"].')" id="edit">Edit</button>';
    // echo '<button onclick="update('.$row["id"].')" id="edit">Edit</button>';
    echo '<div id="formulaire></div>';
    echo '<form style="display:none" method="get" action="bdd_access.php" id="updateForm"><input type="text" name="update"></input><input type="hidden" value="'.$row["id"].'" name="id"></input><button type="submit">OK</button></form>';
    echo '<br>';
}

echo '</ul>';
// echo '<script>
// let edit=document.getElementById("edit");
// let updateForm=document.getElementById("updateForm");
// edit.addEventListener("click", ouvrirFormulaire);
// function ouvrirFormulaire() {
//     if(updateForm.style.display="none") {
//         updateForm.style.display="block"
//     } else {
//         updateForm.style.display = "none";
//     }
//   }
// </script>';

// $result=mysqli_query($mysqli,"SELECT*FROM courses");
// $together=mysqli_fetch_all($result,MYSQLI_ASSOC);
// var_dump($together);
// echo json_encode($together);

?>