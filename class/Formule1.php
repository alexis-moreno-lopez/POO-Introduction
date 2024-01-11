<?php
class Formule1 {

    private $speed=0;

    public function drive() {
        echo "vroom vroom à  $this->speed  km/h";
    }
    public function setShiftGear($addSpeed) {
    $this->speed += $addSpeed;
        
    }
}
$myFormule1 = new Formule1();
$myFormule1->drive();
$myFormule1->setShiftGear(10);
$myFormule1->drive();
var_dump($myFormule1);
?>