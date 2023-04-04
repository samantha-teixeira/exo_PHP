<?php

require_once 'LapinExotique.php';



$lapinExo = new LapinExotique('Jeanne',7,11);
$lapinExo2 = new LapinExotique('Serge', 13);
//$lapinEuro = new LapinEuropeen();

var_dump($lapinExo->faireDesGosses($lapinExo2));