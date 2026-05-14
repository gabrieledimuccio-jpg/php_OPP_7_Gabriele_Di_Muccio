<?php
require('ironman1.php');
require('ironman2.php');
require('ironman3.php');


class IronMan{
public $attack1;
public $attack2;
public $attack3;
public $attack11;
public $attack22;
public $attack33;
public function __construct(RightArm $_attack1, LeftArm $_attack2, Legs $_attack3, RightArm $_attack11, LeftArm $_attack22, Legs $_attack33){
    $this->attack1 = $_attack1;
    $this->attack2 = $_attack2;
    $this->attack3 = $_attack3;
    $this->attack11 = $_attack11;
    $this->attack22 = $_attack22;
    $this->attack33 = $_attack33;
}
public function attack1(){
    $this->attack1->attack1();
}
public function attack2(){
    $this->attack2->attack2();
}
public function attack3(){
    $this->attack3->attack3();
}
public function attack11(){
    $this->attack11->attack11();
}
public function attack22(){
    $this->attack22->attack22();
}
public function attack33(){
    $this->attack33->attack33();
}
}

$tony = new IronMan(new laser, new Missili, new Propulsori);
$tony1 = new IronMan(new RaggioRepulsore, new Missili, new Cannoni);
$tony2 = new IronMan(new laser, new ScudoMagnetico, new Propulsori);
$tony->attack1();
$tony->attack2();
$tony->attack3();
?>