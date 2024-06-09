<?php
class Person
{
    public function display($name, $address, $salary = null)
    {
        echo "Name: {$name}\n";
        echo "Address: {$address}\n";
        if ($salary !== null){
            echo "Salary: {$salary}\n";
        }
    }

}


$obj = new Person("Raghav", "Pokhara");

$obj->display("Ram", "123 Main Street");
$obj->display("Sita", "456 Street", 50000);

?>