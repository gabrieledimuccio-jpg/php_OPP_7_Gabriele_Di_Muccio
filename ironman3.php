<?php
abstract class Legs{
abstract public function attack3();
}

class Propulsori extends Legs{
public function attack3(){
echo "Propulsori attivati \n";
}
}

class Cannoni extends Legs{
public function attack3(){
echo "Cannoni attivati \n";
}
}
?>