<?php



$conn = new mysqli("localhost", "root", "", "myemployees");

if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $message = "This is the message";

    $sql = mysqli_query($conn, "INSERT INTO jhola(name,phone,address) VALUES('$name', '$phone', '$address')");

    if($sql){
        echo "Added Successfully";
    }
    else{
        echo "Error in inserting";
    }

    echo "$message";
}

$conn->close();
