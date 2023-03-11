<?php

class MyClass{
    public $a, $x, $y, $z;

    public function mysum(){
        $this->z = $this->x + $this->y - $this->a;
        return $this->z;

    }
}


$asad = new MyClass();
$asad->a = 100;
$asad->x = 500;
$asad->y = 500;
echo $asad-> mysum();



?>