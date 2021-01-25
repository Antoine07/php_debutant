<?php

// définition de notre variable $notes 
// = permet de faire une assignation 
$notes = [12,15,16,20,13];

// debug => affiche le contenu de la variable
var_dump($notes);

// Exercice 1
/*
    Faites la somme des valeurs du tableau $notes
*/

$sum = 0 ;

// parcourir un tableau ? => oui très bonne idée car c'est dynamique, ne dépend pas de la taille du tableau !
//  Ou utiliser une fonction comme array_sum

// Sans boucle et sans la fonction array_sum
$sum = $notes[0] + $notes[1] + $notes[2] + $notes[3] + $notes[4];

// Une autre approche dynamique 

/*
 Décrisption de la boucle
    $i = 0, , 0 < 5  => V , affiche $notes[0] => 12, $i = 0 + 1 = 1
    $i = 1, 1 < 5  => V, affiche $notes[1] => 15, $i = 1 + 1 = 2
    $i = 2, 2 < 5 => V, affiche $notes[2] => 16, $i = 2 + 1 = 3
    $i = 3, 3 < 5 => V, affiche $notes[3] => 20, $i =  3 + 1 = 4
    $i = 4, 4 < 5 => V, affiche $notes[4] => 13, $i =  4 + 1 = 5
    $i = 5, 5 < 5 => F
*/

for ($i=0; $i < count($notes) ; $i = $i + 1) { 
    echo "<br />";
    echo $notes[$i];
    echo "<br />";
}

/*
$sum = 0
$i = 0, , 0 < 5  => V , $sum = $notes[0] + $sum = 12 + 0 = 12, $i = 0 + 1 = 1
$i = 1, 1 < 5  => V,$sum = $notes[1] + $sum = 15 + 12 = 27 , $i = 1 + 1 = 2
$i = 2, 2 < 5 => V, $sum = $notes[2] + $sum = 16 + 27 = 43, $i = 2 + 1 = 3
$i = 3, 3 < 5 => V,$sum = $notes[3] + $sum = 20 + 43 = 63 , $i =  3 + 1 = 4
$i = 4, 4 < 5 => V, $sum = $notes[4] + $sum = 13 + 63 = 76 , $i =  4 + 1 = 5
$i = 5, 5 < 5 => F
*/

$sum = 0 ;

for ($i=0; $i < count($notes) ; $i = $i + 1) { 
    $sum = $notes[$i] + $sum;
}

echo "<br />";
echo "somme :" . $sum;
echo "<br />";

// Moyenne on la calulera que si il y a des notes dans $notes 
if( count($notes) > 0 ){
    // round permet d'arrondir une valeur avec des décimales, ici 2 décimales après la virgule
    $average = round( $sum / count($notes), 2 );
    echo "<br />";
    echo $average;
    echo "<br />";
}