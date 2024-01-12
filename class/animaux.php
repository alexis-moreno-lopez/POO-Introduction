<?php

class Animal { // je crée une classe Animal
private $taille; // je lui donne une ou plusieurs propriétés
public function info() { // ma classe contient la méthode (info)

    echo "je suis un animal"; // je echo "je suis un animal"
}
public function setTaille($taille) {
    $this->taille = $taille;
    }
    public function getTaille() {
        return $this->taille;
    }
}

class Mammifère extends Animal { // je crée une classe Mammifère qui hérite de la classe Animal
    private $type; // je lui donne une ou plusieurs propriétés
    public function infoPlus() { // ma classe Mammifère contient la méthode (infoPlus)
        echo "je suis un mammifère";
    }
    public function setType($type) {
    $this->type = $type;
    }
    public function getType() {
        return $this->type;
    }
}
class Chien extends Mammifère { // je crée une classe chien qui hérite de Mammifère
    private $race; // je lui donne une ou plusieurs propriétés
    public function crie() { // ma classe contient la méthode (crie)
        echo "wouaf wouaf";
    }
    public function setType($race) {
        $this->race = $race;
        }
        public function getType() {
            return $this->race;
        }
}



$rio = new Chien(); // je crée un nouveau chien
$rio->info(); // je donne les étapes à suivre
$rio->infoPlus(); // je donne les étapes à suivre
$rio->crie(); // je donne les étapes à suivre
$rio->setTaille("100");
echo $rio->getTaille();
$rio->setType("caniche");
echo $rio->getType();
// var_dump($rio); // je donne les étapes à suivre






// class Formule1 {

//     private $speed=0;

//     public function drive() {
//         echo "vroom vroom à  $this->speed  km/h";
//     }
//     public function setShiftGear($speed) {
//     $this->speed += $speed;
        
//     }
// }
// $myFormule1 = new Formule1();
// $myFormule1->drive();
// $myFormule1->setShiftGear(10);
// $myFormule1->drive();
// var_dump($myFormule1);












?>
