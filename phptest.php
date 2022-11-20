<?php
$sentiments=["envie","colère","joie","jalousie","envie de rentrer chez soi"];
    echo '<table>';

for ($i=0;$i<count($sentiments);$i++) {
    echo '<tr><td>'.$sentiments[$i].'</td></tr>';
}
    echo '</table>';

    $person=[];
    $person["age"]=23;
    $person["birth"]=1999;
    $person["activity"]="médecine";
    $person["status"]="étudiant";
    $person["firstname"]="John";
    $person["lastname"]="Doe";

    echo $person["firstname"]." ".$person["lastname"]." est né en ".$person["birth"].", il à donc ".$person["age"]." ans. Il est ".$person["status"]." en ".$person["activity"].".";


foreach ($person as $key=>$value) {
    echo "clef : ".$key." à pour valeur ".$value;
    echo "<br>";
}

if (isset($_GET["seuil"])) {
    $seuil=$_GET["seuil"];
} else {
    $seuil=18;
}

if (isset($_GET["color1"])) {
    $color1=$_GET["color1"];
} else {
    $color1="blue";
}

if (isset($_GET["color"])) {
    $color=$_GET["color"];
} else {
    $color="red";
}

$temperatures=["20220101"=>18.5,"20220102"=>16,"20220103"=>14,"20220104"=>14.7];

foreach ($temperatures as $date=>$temp) {
    echo "Le ".$date." ,la température à midi était de : ".$temp."°C.<br>";
}

foreach ($temperatures as $date=>$temp) {
    if ($temp >$seuil) {
        echo '<p style="color:'.$color1.'">'.$date." : ".$temp.'</p>';
        } else {
        echo '<p style="color:'.$color.'">'.$date." : ".$temp.'</p>';
        }
}


?>