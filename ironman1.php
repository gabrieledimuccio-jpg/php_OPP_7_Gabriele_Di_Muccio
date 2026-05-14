<?php
abstract class RightArm{
abstract public function attack1();
}
class RaggioRepulsore extends RightArm{
public function attack1(){
echo "Raggio repulsore attivato \n";
}
}

class Laser extends RightArm{
public function attack1(){
echo "Laser attivato \n";
}
}
?>
