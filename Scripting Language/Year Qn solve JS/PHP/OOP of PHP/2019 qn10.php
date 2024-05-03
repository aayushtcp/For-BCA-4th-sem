<?php

class Employee
{
    public $name, $address;

    // function __construct($name, $address)
    // {
    //     $this->name = $name;
    //     $this->address = $address;
    // }
    public function setName($name){
        $this->name = $name;
    }
    public function setAddress($address){
        $this->address = $address;
    }
}


class Permanent extends Employee
{
    private $salary, $post;

    function __construct($name, $address)
    {
        parent::setName($name);
        parent::setAddress($address);
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
$obj->setName("JholaGang");
$obj->setAddress("Birgunj");
$obj->setSalary(20000);
$obj->setPost("Rapper");
$obj->displayAll();
