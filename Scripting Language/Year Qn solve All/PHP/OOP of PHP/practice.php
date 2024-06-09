<?php
class Animal
{
    public $name;
    public $sound;

    function __construct($name, $sound)
    {
        $this->name = $name;
        $this->sound = $sound;
    }
    // methods

    // function display(){
    //     echo "$this->name\n";
    //     echo "$this->sound";
    // }

    // Using Deconstructor
    function __destruct()
    {
        echo "$this->name\n";
        echo "$this->sound";
    }
}


$obj = new Animal("Dog", "Barks");
// $obj->display();
