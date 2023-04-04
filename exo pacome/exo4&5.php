<?php
$entier=[1,2,3,4,5,6,7,8,2,3,4,5,6];

function indexesPairs($tab) {
 foreach ($tab as $cle => $valeur) {
    if ($cle%2==0){
        echo $valeur."<br>";
    } 
 }
}
indexesPairs($entier);
echo "<br>";


function valeursPaires($tab) {
    foreach($tab as $valeur) {
        if ($valeur%2==0) {
            echo $valeur."<br>";
        }
    }
}
valeursPaires($entier);
echo "<br>";


$tabentier=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35];
function divisiblePar($t,$e) {
    foreach($t as $cle =>$valeur) {
        if ($valeur%$e==0) {
            print_r($newTab =[$valeur])."<br>";
        }
    }
}
divisiblePar($tabentier,5);
echo "<br>";
echo "<br>";


function sansDoublons ($t) {
    $newTab=array_unique($t);
    print_r($newTab);
}
sansDoublons ($entier);
echo "<br>";
echo "<br>";

function intersection($t1,$t2) {
    print_r(array_intersect($t1, $t2));
}
intersection($entier,$tabentier);
echo "<br>";
echo "<br>";

function difference($t1,$t2) {
    print_r(array_diff($t1, $t2));
}
difference($tabentier,$entier);
echo "<br>";
echo "<br>";

function dernierElements($t) {
    print_r(array_slice($t,-3));
}
dernierElements($entier);
echo "<br>";
echo "<br>";

$pain="pain au chocolat";
$crois="croissant";
$viennoisserie=["chouquettes","brioche","baba au rhum"];

function plusLongueChaine($a,$b) {
    if (strlen($a)>strlen($b)) {
        echo $a;
    } else {
        echo $b;
    }
}
plusLongueChaine($pain,$crois);
echo "<br>";
echo "<br>";

$pain="pain au chocolat";
$crois="croissant";


function plusCourteChaine($a) {
        if (strlen($a[0])<strlen($a[1])) {
            echo $a[0];
        } else {
            echo $a[1];
        }
    }
plusCourteChaine($viennoisserie);
echo "<br>";
echo "<br>";



function moyenneLongueurs($a) {
    $longueurtab=0;
    for ($i=0;$i<count($a);$i++) {
        $longueurtab+=strlen($a[$i]);
    }
    echo $longueurtab/count($a);
}
moyenneLongueurs($viennoisserie);
echo "<br>";
echo "<br>";

// function moyenneLongueurs($a) {
//     $longueurtab=0;
//     foreach($a as $valeur) {
//         $longueurtab += strlen($valeur);
//     }
//     echo $longueurtab/count($a);
// }
// moyenneLongueurs($viennoisserie);



function commencePar($tab,$lettre) {
    $newTab=[];
    foreach($tab as $valeur) {
        $firstLettre= substr($valeur,0,1);
        if ($firstLettre === $lettre){
            array_push($newTab, $valeur);
        }    
    }
    print_r($newTab);
}
commencePar($viennoisserie,"b");
echo "<br>";
echo "<br>";

function finiPar($tab,$lettre) {
    $newTab=[];
    foreach($tab as $valeur) {
        $lastLettre= substr($valeur,-1);
        if ($lastLettre === $lettre){
            array_push($newTab, $valeur);
        }    
    }
    print_r($newTab);
}
finiPar($viennoisserie,"e");
echo "<br>";
echo "<br>";

function nbMots($p) {
    $nb=explode(" ",$p);
    echo count($nb);
}
nbMots("J’aime pHP. Il est fantastique.");
echo "<br>";
echo "<br>";

function nbOccurencesMot($p,$m) {
    $nb=strpos($p,$m);
    echo $nb;
}
nbOccurencesMot("J’aime pHP. Il est fantastique.","est");

?>