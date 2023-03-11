<?php

class MyClass{
    public $a, $x, $y, $z;

    public function mysum(){
        $this->z = $this->x + $this->y - $this->a;
        return $this->z;

    }
}


$asad = new MyClass();
$asad->a = 11;
$asad->x = 10;
$asad->y = 15;
echo $asad-> mysum();



?>