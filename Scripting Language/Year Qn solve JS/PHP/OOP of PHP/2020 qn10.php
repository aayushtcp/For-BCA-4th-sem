<?php
class Person {
    public $name, $address;

    function __construct($name, $address){
        $this->name = $name;
        $this->address = $address;
    }

    public function display(){
        echo "Name: ". $this->name . "\n";
        echo "Address: ". $this->address . "\n";
    }
}


class Employee extends Person{
    public $salary;
    function __construct($name, $address, $salary){
        parent::__construct($name, $address);
        $this->salary = $salary;
    }

    public function display(){
        echo "Name: ". $this->name . "\n";
        echo "Address: ". $this->address . "\n";
        echo "Salary: ". $this->salary . "\n";
    }
}


$obj = new Employee("Jhola", "KTMCITY", 37000);
$obj->display();


?>