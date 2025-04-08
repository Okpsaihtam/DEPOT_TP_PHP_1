<?php

print ("EXERCICE 1 </br> </br>");

$fruits = ["Pomme","Banane","Kiwi","Fraise","Poire"];

foreach($fruits as $i){
    echo $i;
    echo "</br>";
}

echo "</br>";
echo "</br>";

print ("EXERCICE 2 </br> </br>");

$personne = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "age" => 30,
    "ville" => "Paris"
];

foreach ($personne as $cle => $valeur) {
    echo "$cle : $valeur </br>";
}

echo "</br>";
echo "</br>";

print ("EXERCICE 3 </br> </br>");

$etudiants = [
    ["nom" => "Martin", "note" => 15],
    ["nom" => "Durand", "note" => 12],
    ["nom" => "Petit", "note" => 18]
];
 foreach ($etudiants as $etudiant) {
    echo "Nom : " . $etudiant ["nom"] . "</br>" ." Note : ". $etudiant ["note"] . "</br>"."</br>";
 }