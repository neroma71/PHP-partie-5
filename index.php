<?php
$months = [
    "janvier", 
    "février", 
    "mars",
    "avril",
    "mai", 
    "juin", 
    "juillet", 
    "aout", 
    "septembre", 
    "octobre", 
    "novembre", 
    "decembre"
];
echo $months[2]."<br />";
echo $months[5]."<br />";
$months[7] = "aôut";
echo $months[7];
echo "<br />";
$departements = [
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme'
];
echo $departements[59];
echo "<br />";
echo "<br />";
$departements[51] = "Marne";
echo $departements[51];
echo "<br />";
echo "<br />";
foreach($months as $mois){
    echo $mois."<br />";
}
echo "<br />";
echo "<br />";
foreach($departements as $dep){
    echo $dep."<br />";
}
echo "<br />";
echo "<br />";
foreach($departements as $dep => $value){
    echo $dep." : ". $value. "<br>";
}
