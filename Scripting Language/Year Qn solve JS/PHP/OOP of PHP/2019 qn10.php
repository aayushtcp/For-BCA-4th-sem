<?php



class Employee
{
    public $name, $address;


    public function setName($name)
    {
        $this->name = $name;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
}


class Permanent extends Employee
{
    public $salary, $post;

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function setPost($post)
    {
        $this->post = $post;
    }


    function displayAll(){
        echo "Salary: ". $this->salary;
        echo "Post: ". $this->post;
        echo "Name: ". $this->name;
        echo "Address: ". $this->address;
    }
}

$obj = new Permanent("Aayush", "Hetauda", 1000, "Manager");

$obj->setName("AAYUSH");
$obj->setAddress("Hetauda");
$obj->setSalary(1000);
$obj->setPost("Manager");

$obj->displayAll();




?>