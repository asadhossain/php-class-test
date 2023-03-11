<?php

class MyClass{
    public $a, $x, $y, $z;

    public function __construct($b, $c){
        $this->x = $b;
        $this->y = $c; 

    }

    public function mysum(){
        $this->z = $this->x + $this->y - $this->a;
        return $this->z;

    }
}


$asad = new MyClass(200, 200, 100);

echo $asad-> mysum();



?>