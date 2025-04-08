<?php

print ("EXERCICE 1 </br></br>");

$jour = date("l");
$message = "";

switch ($jour) {
    case "Monday":
        $message = "Courage, c'est le début de la semaine !";
        break;
    case "Tuesday":
        $message = "Deuxième jour de la semaine on tient bon !";
        break;
    case "Wednesday":
        $message = "C'est le milieu de la semaine !";
        break;
    case "Thursday":
        $message = "Allez on entame la deuxième partie de la semaine !";
        break;
    case "Friday":
        $message = "Encore un jour et c'est le week-end !";
        break;
    case "Saturday":
        $message = "Enfin le week-end !";
        break;
    case "Sunday":
        $message = "Reprise des cours demain, profite bien de cette dernière journée !";
        break;
    default :
        $message = "jour inconnu";
}

echo "Aujourd'hui c'est $jour : $message </br></br>";
echo "</br>";

print ("EXERCICE 2 </br></br>");
$note = 18;
$appreciation = "";

switch (true) {
    case ($note >= 18):
        $appreciation = "Excellent (A+)";
        break;
    case ($note >= 16):
        $appreciation = "Très bien (A)";
        break;
    case ($note >= 14):
        $appreciation = "Bien";
        break;
    case ($note >= 12):
        $appreciation = "Assez bien";
        break;
    case ($note >=10):
        $appreciation = "Passable";
        break;
    default :
        $appreciation = "Insuffisant";
}

echo "Note : $note/20 </br> Appréciation : $appreciation";