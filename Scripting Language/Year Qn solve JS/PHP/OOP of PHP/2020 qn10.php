<?php
class Person
{
    public $name, $address;
    function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function display()
    {
        echo "Name: {$this->name}\n";
        echo "Address: {$this->address}\n";
    }
}

class Employee extends Person
{
    private $salary;

    function __construct($name , $address,$salary)
    {
        parent::__construct($name,$address);
        $this->salary = $salary;
    }

    public function display()
    {
        parent::display();
        echo "Salary: {$this->salary}\n";
    }
}

$obj = new Employee("Ram", "Kathmandu", 29000);
$obj->display();

?>
