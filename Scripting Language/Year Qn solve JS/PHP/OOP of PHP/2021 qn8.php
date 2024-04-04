<?php

class Animal{

    public $name, $sound;

    function __construct($name, $sound){
        $this->name = $name;
        $this->sound = $sound;
    }

    public function display(){
        echo "Name: {$this->name}\n";
        echo "Sound: {$this->sound}\n";
    }

}

$obj = new Animal("Dog", "Bark");
$obj->display();

?>