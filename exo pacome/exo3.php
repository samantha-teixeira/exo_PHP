<?php

function fairePoint($x,$y){
    $coordonnées=[$x,$y];
    return $coordonnées;
}
print_r(fairePoint(3,6));
echo '<br>';

;   

function distCoords($x1,$y1,$x2,$y2) {
    $distance= sqrt(($x2-$x1)**2 +($y2-$y1)**2);
    echo "La distance entre les coordonnées:(x:".$x1." et y:".$y1.") et (x:".$x2." et y:".$y2.") est de ".$distance.".";
}
print_r(distCoords(8,25,-2,33));
echo "<BR>";


function faireVecteur($p1,$p2) {
    $vecteur=[$p1,$p2];
    return $vecteur;
}
var_dump(faireVecteur(fairePoint(6,2),fairePoint(3,25)));
echo "<BR>";

?>