<?php

class Personne {
    private $nom;
    private $prenom;
    private $age;

    public function __construct($nom, $prenom, $age) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getAge() {
        return $this->age;
    }

    public function setNom() {
        $this->nom = $nom;
    }

    public function setPrenom() {
        $this->prenom = $prenom;
    }

    public function setAge() {
        $this->age = $age;
    }

    public function sePresenter() {
        echo "Bonjour, je m'appelle " . $this->prenom . " " . $this->nom . " et j'ai " . $this->age . " ans.</br>";
    }

    public function estMajeur() {
        if ($this->age >= 18) {
            echo $this->prenom . " est majeur.</br>";
        } else {
            echo $this->prenom . " est mineur.</br>";
        }
    }
}

$personne1 = new Personne ("Dupont","Jean",20);
$personne1->sePresenter;
$personne1->estMajeur;

$personne1->setAge(16);
$personne1->sePresenter;
$personne1->estMajeur;