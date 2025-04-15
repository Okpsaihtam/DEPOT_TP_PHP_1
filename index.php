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

<<<<<<< HEAD
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
        return "La voiture klaxonne : Bip Bip !";
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
        return "La moto rugit : Vroooom !";
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
=======
class vehicule {
    protected $marque;
    protected $modele;
    protected $annee;

    public function __construct($marque, $modele, $annee) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }

    public function getInfo () {
        return "Marque: $this->marque, Modèle: $this->modele, Année: $this->annee";
    }

    public function demarrer () {
        return "Le véhicule démarre.";
    }
}

class voiture extends vehicule {
    private $nombrePortes;
    private $typeCarburant;

    public function __construct($marque, $modele, $annee, $nombrePortes, $typeCarburant) {
        parent::__construct($marque, $modele, $annee);
        $this->nombrePortes = $nombrePortes;
        $this->typeCarburant = $typeCarburant;
    }

    public function getInfos() {
        return parent::getInfo() . ", Portes: $this->nombrePortes, Carburant: $this->typeCarburant";
    }

    public function klaxonner() {
        return "La voiture klaxonne : Bip Bip !";
    }
}

class Moto extends Vehicule {
    private $cylindree;

    public function __construct($marque, $modele, $annee, $cylindree) {
        parent::__construct($marque, $modele, $annee);
        $this->cylindree = $cylindree;
    }

    public function getInfo() {
        return parent::getInfo() . ", Cylindrée: $this->cylindree cc";
    }

    public function cabrer() {
        return "La moto cabre sur une roue !";
    }
}

$voiture = new Voiture ("Renault", "Zoé", 2021, 5, "électrique");
echo $voiture->getInfo() . "</br>";
echo $voiture->demarrer() . "</br>";
echo $voiture->klaxonner() . "</br></br>";

$moto = new Moto ("Yamaha", "MT-07", 2022, 689);
echo $moto->getInfo() . "</br>";
echo $moto->demarrer() . "</br>";
echo $moto->cabrer() . "</br>";

>>>>>>> bf2159f6bc241b14bd57d99f4bfd03010f0ef984


