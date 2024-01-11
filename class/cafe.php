<?php

class MachineACafe {

private $marque;
private $cafe;
private $enFonction;

public function __construct($marque) {
    $this->marque = $marque;
}
public function allumage($etat) {
    $this->enFonction = $etat;
    if ($this->enFonction) {
        echo $this->marque ." "."est en fonction,"." ";
    }else{
        
        echo $this->marque ." "."est éteint,"." ";
    }

}

public function faireDuCafe() {
    if ($this->enFonction) {
        
        echo $this->cafe ." "."le cafe est pret,"." ";
    }else{
        
        echo $this->cafe ." "."le cafe n'est pas pret,"." ";
    }
}

public function mettreUneDosette() {
    if ($this->enFonction) {
        
        echo "je mets une dosette,"." ";
    }else{
        
        echo "je ne mets pas de dosette,"." ";
    }
}
public function vousPrennezDuSucre() {
    if ($this->enFonction) {
        
        echo "oui je veux du sucre,"." ";
    }else{
        
        echo "non je ne veux pas de sucre,"." ";
    }
}
public function monnaie() {
    if ($this->enFonction) {
        
        echo "le montant est de 10 euros,"." ";
    }else{
        
        echo "tempis pour toi,"." ";
    }
}

}


$machine = new MachineACafe("Senseo");
$machine->allumage(true);
$machine->mettreUneDosette();
$machine->faireDuCafe(true);
$machine->vousPrennezDuSucre();
$machine->monnaie();
var_dump($machine);

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