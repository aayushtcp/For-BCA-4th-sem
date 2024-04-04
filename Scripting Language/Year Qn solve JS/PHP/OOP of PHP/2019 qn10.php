<?php

class Employee
{
    public $name, $address;

    function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }
}


class Permanent extends Employee
{
    private $salary, $post;

    function __construct($name, $address, $salary, $post)
    {
        $this->name = $name;
        $this->address = $address;
        $this->post = $post;
        $this->salary = $salary;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function setPost($post)
    {
        $this->post = $post;
    }

    function displayAll()
    {
        echo "Name: {$this->name}\n";
        echo "Address: {$this->address}\n";
        echo "Salary: {$this->salary}\n";
        echo "Post: {$this->post}\n";
    }
}

$obj = new Permanent("Ram", "Hetauda", 40000, "Manager");
$obj->displayAll();
