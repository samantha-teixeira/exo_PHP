<?php
$message_secret="Le vent souffle dans les saules";
$message_refus="Cette page est protégé"."<br>"."Veuillez demander votre login et mot de passe à l'administrateur.";

$loginTab=["cassandra"=>"14ven1r","superman"=>"kryptoneeet","ironman"=>"superPille"];

$delivered=false;

if (isset($_GET["login"]) && isset($_GET["pass"])) {
    foreach ($loginTab as $login=>$pass) {
        if ($login==$_GET["login"] && $pass==$_GET["pass"]) {
            echo $message_secret;
            $delivered=true;
        } 
    } 
}

if ($delivered==false) {
        echo $message_refus;
}
?>