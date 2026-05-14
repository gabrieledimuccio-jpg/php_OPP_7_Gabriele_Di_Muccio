<?php
abstract class LeftArm{
abstract public function attack2();
}

class ScudoMagnetico extends LeftArm{
public function attack2(){
echo "Scudo magnetico attivato \n";
}
}

class Missili extends LeftArm{
public function attack2(){
echo "Missili attivati \n";
}
}
?>