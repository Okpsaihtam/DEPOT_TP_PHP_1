<?php
class Vehicule {
    protected $marque;
    protected $modele;
    protected $annee;
    
    public function __construct($marque, $modele, $annee) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }
    
    public function getInfos() {
        return "Marque : {$this->marque}, Modèle : {$this->modele}, Année : {$this->annee}";
    }
    
    public function demarrer() {
        return "Le véhicule démarre.";
    }
}

class Voiture extends Vehicule {
    private $nombrePortes;
    private $typeCarburant;
    
    public function __construct($marque, $modele, $annee, $nombrePortes, $typeCarburant) {
        parent::__construct($marque, $modele, $annee);
        $this->nombrePortes = $nombrePortes;
        $this->typeCarburant = $typeCarburant;
    }
    
    public function getInfos() {
        $infosParent = parent::getInfos();
        return $infosParent . ", Portes : {$this->nombrePortes}, Carburant : {$this->typeCarburant}";
    }
    
    public function klaxonner() {
        return "La voiture klaxonne : Attention Attention un pickpocket !";
    }
}

class Moto extends Vehicule {
    private $cylindree;
    
    public function __construct($marque, $modele, $annee, $cylindree) {
        parent::__construct($marque, $modele, $annee);
        $this->cylindree = $cylindree;
    }

    public function getInfos() {
        $infosParent = parent::getInfos();
        return $infosParent . ", Cylindrée : {$this->cylindree}cc";
    }

    public function faireRugir() {
        return "La moto rugit : Youhou les policiers j'ai pas le permis !";
    }
}

$voiture = new Voiture("Renault", "Clio", 2020, 5, "Essence");
echo $voiture->getInfos() . "<br>";
echo $voiture->demarrer() . "<br>";
echo $voiture->klaxonner() . "<br>";

echo "<br>";

$moto = new Moto("Yamaha", "MT-07", 2022, 689);
echo $moto->getInfos() . "<br>";
echo $moto->demarrer() . "<br>";
echo $moto->faireRugir() . "<br>";

echo "<br>";

$voiture2 = new Voiture("Lamborghini", "Aventador", 2024, 5, "Essence");
echo $voiture2->getInfos() . "</br>";
echo $voiture2->demarrer() . "</br>";
echo $voiture2->klaxonner() . "</br>";

echo "<br>";

$moto2 = new Moto("Kawasaki", "Ninja", 2025, 998);
echo $moto->getInfos() . "<br>";
echo $moto->demarrer() . "<br>";
echo $moto->faireRugir() . "<br>";