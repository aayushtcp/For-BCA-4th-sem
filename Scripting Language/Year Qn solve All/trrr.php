<?php

class Person{
    // public $name, $address;
    public function display($name, $address, $salary = null)
    {
        echo "Name: ".$name;
        echo "Address: ".$address;
        if ($salary){
            echo "Salary: ".$salary;
        }
    }

}

$obj = new Person("Ram", "Hetauda-10");


?>