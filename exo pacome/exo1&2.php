<?php
// $fruits=["fraises","banana","pommes","cerises","ananas"];
// var_dump($fruits);
// echo '<br>';



// echo count($fruits);
// echo '<br>';
// echo '<br>';



// foreach ($fruits as $valeur) {
//     echo $valeur ."<br>";
// }
// echo '<br>';



// foreach ($fruits as $cle => $valeur) {
//     echo ($cle+1 ." ".$valeur ."<br>");
// }
// echo '<br>';



// for ($i=0; $i<count($fruits)-1;$i++) {
//     echo  ($fruits[$i]." ".$fruits[$i+1]."<br>");
// }
// echo '<br>';


// $prix_euros = [101,42,7,28,62];

// sort($prix_euros);
// print_r($prix_euros);
// echo '<br>';
// echo '<br>';

// foreach ($prix_euros as $valeur) {
//     $ajout =10;
//     echo ($valeur+$ajout."<br>");
// }
// echo '<br>';


// $prix_vente=array_combine($fruits,$prix_euros);
// print_r($prix_vente);
// echo '<br>';
// echo '<br>';

// foreach ($prix_vente as $cle => $valeur) {
//     if ($valeur<50) {
//         echo ($cle."<br>");
//     }
// }
// echo "<br>";

// foreach ($prix_vente as $cle => $valeur) {
//     if ($valeur%2==0) {
//         echo ($cle."<br>");
//     }
// }
// echo '<br>';


// $panier=[];
// $total=0;
// foreach ($prix_vente as $cle => $valeur) {
//     if ($total + $valeur >138)
//     break;
//     $total=+$valeur;
//     $panier[] =$cle;
// }
// print_r($panier);
// echo '<br>';
// echo "c'a m'as coûté ".$total." euros";


/*
1) Module 1
*/

$fruits = ["fraises","banana","pommes","cerises","ananas"];

//afficher le détail du tableau fruits
var_dump($fruits);
//print_r($fruits);

//afficher le nombre d’éléments
echo count($fruits);

//parcourir le tableau et afficher les éléments un par un;
foreach($fruits as $fruit){
	echo $fruit."\n";//.'<br>';
}

//parcourir le tableau et afficher les éléments un par un précédé par la clé;
foreach($fruits as $position => $fruit){
	echo ($position+1).') '.$fruit."\n";//.'<br>';
}

//parcourir le tableau et afficher les éléments deux par deux : courant et suivant;
for($f = 0 ; $f < count($fruits)-1; $f++){
	echo ($f+1).') '.$fruits[$f].' -> '.$fruits[$f+1]."\n";//.'<br>';	
}



/*
2) Module 2
*/
echo "\n Module 2 \n\n";

print_r($prix_euros = [101,42,7,28,62]);

echo "\n ordonner le tableau \n\n";
//ordonner le tableau
sort($prix_euros);
var_dump($prix_euros);

echo "\n ajouter 10 euros à chaque prix \n\n";
//ajouter 10 euros à chaque prix
var_dump($prix_euros);
foreach($prix_euros as $k => $p){
	$prix_euros[$k] += 10;
}
var_dump($prix_euros);

echo "\n combiner les fruits et les prix pour obtenir une attribution de prix d’achats \n\n";
//combiner les fruits et les prix pour obtenir une attribution de prix d’achats
$prix_des_fruits = array_combine($fruits, $prix_euros);
var_dump($prix_des_fruits);

echo "\n afficher les fruits qui ont un prix inférieur à 50 euros \n\n";
//afficher les fruits qui ont un prix inférieur à 50 euros
foreach($prix_des_fruits as $fruit => $prix){
	if($prix < 50)
		echo $fruit."\n";
	//echo ($prix < 50) ? $fruit."\n" : "";
}

echo "\n afficher les fruits qui ont un prix pair \n\n";
//afficher les fruits qui ont un prix pair
$fruits_prix_pairs = array_filter($prix_des_fruits, function($p,$f){
	return $p % 2 == 0;
}, ARRAY_FILTER_USE_BOTH );

var_dump($fruits_prix_pairs);

echo "\n Composer un panier de fruits ne dépassant pas 138 euros. \n\n";
//Composer un panier de fruits ne dépassant pas 138 euros.
$panier = [];
$total = 0;
foreach($prix_des_fruits as $fruit => $prix){
	if($total+$prix > 138)
		break;
	$total+=$prix;
	$panier[] = $fruit;
}

var_dump($panier);
echo " Ca m'a couté : ".$total.' € ';






?>