<?php
require('ironman11.php');
require('ironman22.php');
require('ironman33.php');
require('ironman222.php');
require('ironmana333.php');


class IronMan{
public $attack1;
public $attack2;
public $attack3;
public static $counter = 0;

public function __construct(RightArm $_attack1, LeftArm $_attack2, Legs $_attack3){
$this->attack1 = $_attack1;
$this->attack2 = $_attack2;
$this->attack3 = $_attack3;
self::$counter++;
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
}

$tony = new IronMan(new RaggioRepulsore(), new Missili(), new Propulsori());
$tony1 = new IronMan(new RaggioRepulsore(), new ScudoMagnetico(), new Propulsori());
$tony2 = new IronMan(new RaggioRepulsore(), new Missili(), new CorazzaGambe());
$tony->attack1();
$tony->attack2();
$tony->attack3();
echo IronMan::$counter . "\n";
?>