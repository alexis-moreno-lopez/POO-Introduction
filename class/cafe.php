<?php

class MachineACafe {
    private $marque;
    private $enFonction;
    private $dosette = false;
    private $prixCafe = 1;

    public function __construct($marque) { //
        $this->marque = $marque;
    }

    public function allumage($state) {
        $this->enFonction = $state; // On passe la variable enFonction à true ou false, si true la machine est en fonction, si false la machine est en arrêt
        if($state) {
            echo "<p>" . $this->marque . " est en fonction </p>";
        } else {
            echo "<p>" . $this->marque . " est en arrêt </p>";
        }
    }

    public function mettreUneDosette() { // Met une dosette dans la machine
        $this->dosette = true; // La machine a une dosette donc on passe la variable à true
        echo "<p>Vous avez mis une dosette</p>";
    }

    public function ajouterSucre($sucre) { // Ajoute du sucre dans le café
        if($sucre) {
            echo '<p>Je mets ' . $sucre . ' sucre(s) dans le café</p>';
        } else {
            echo '<p>Je ne mets pas de sucre dans le café</p>';
        }
    }

    public function monnayeur($argent) { // Récupère l'argent et retourne la monnaie
        if($argent >= $this->prixCafe) {
            $monnaie = $argent - $this->prixCafe;
            echo "<p>Vous avez mis $argent euros dans la machine, " . $this->marque . " prends " . $argent . " euros et vous rends " . ($argent - $this->prixCafe) . " euros </p>";
            return $monnaie; // Retourne la monnaie si l'argent est suffisant
        } else {
            $monnaie = $argent - $this->prixCafe;
            echo "<p>Je ne peux pas prendre " . $argent . " euros, il me faut " . $this->prixCafe . " euros </p>";
            return $monnaie; // Retourne la monnaie si l'argent est insuffisant
        }
    }

    public function faireDuCafe() {
        if($this->dosette) {
            echo "<p>Le café est prêt</p>";
        }
    }

    public function getEnFonction() {
        return $this->enFonction;
    }


}

$machine = new MachineACafe("Senseo");
$machine->allumage(true);
if($machine->getEnFonction()) { // Si la machine est en fonction on peut faire tout le reste
    $machine->mettreUneDosette();
    $machine->ajouterSucre(2);
    $monnaieRendu = $machine->monnayeur(2);
    if($monnaieRendu >= 0) { // Si la monnaie rendu est supérieur ou égal à 0 on peut faire du café car on a assez d'argent
        $machine->faireDuCafe();
    }
}

//-----------------------------------------------------------------------------------------\\
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

public function mettreUneDosette() {
    if ($this->enFonction) {
        
        echo "je mets une dosette,"." ";
    }else{
        
        echo "je ne mets pas de dosette,"." ";
    }
}
public function faireDuCafe() {
    if ($this->enFonction) {
        $this->cafe = true;
       
        echo  "le cafe est pret,"." ";
    }else{
        
        echo "le cafe n'est pas pret,"." ";
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