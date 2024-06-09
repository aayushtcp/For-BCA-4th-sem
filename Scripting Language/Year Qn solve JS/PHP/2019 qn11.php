<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    fieldset {
        width: 200px;
    }
</style>

<body>
    <center>
        <fieldset>
            <legend>Register</legend>
            <label for="">*required data</label>
            <form action="" method="post">
                <label for="">Your Full name*:</label>
                <br>
                <input type="text" name="fullname">
                <br>
                <label for="">Email Address*:</label>
                <br>
                <input type="email" name="email">
                <br>
                <label for="">User Name*:</label>
                <br>
                <input type="text" name="username">
                <br>
                <label for="">Password*:</label>
                <br>
                <input type="password" name="password">
                <br>
                <br>
                <input type="submit">
            </form>
        </fieldset>
    </center>

    <?php
    $conn = new mysqli("localhost", "root", "", "myemployees");
    if($conn->connect_error){
        die("Error in database Connection".$conn->connect_error);
    }
    $usernamePattern = '/^[a-zA-Z]+[0-9]+$/';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fullname = trim($_POST['fullname']);
        $email = trim($_POST["email"]);
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if(strlen($fullname)>40 || empty($fullname)){
            echo "Fullname error";
        }

        else if(!filter_var($email,FILTER_VALIDATE_EMAIL) || empty($email)){
            echo "email is not correct";
        }

        else if(!preg_match($usernamePattern, $username) || empty($username)){
            echo "USername error";
        }

        else if(strlen($password) < 8 || empty($password)){
            echo "Password problem";
        }

        else{
            $sql = mysqli_query($conn, "INSERT INTO infos(fullname, email, username,password) VALUES ('$fullname', '$email', '$username', '$password')");

            if ($sql){
                echo "Successfully signuped";
            }
            else{
                echo "Signup error";
            }

        }
    }






















    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $fullname = trim($_POST['fullname']);
    //     $email = trim($_POST['email']);
    //     $username = trim($_POST['username']);
    //     $password = trim($_POST['password']);


    //     if(strlen($fullname) > 40 || empty($fullname)){
    //         echo "Fullname not valid";
    //     }
    //     else if(!filter_var($email,FILTER_VALIDATE_EMAIL) || empty($email)){
    //         echo "Email not valid";
    //     }
    //     else if(!preg_match($usernamePattern,$username) || empty($username)){
    //         echo "Username not valid";
    //     }
    //     else if(strlen($password)<8 || empty($password)){
    //         echo "Password must be above 8 Characters";
    //     }
    //     else{
    //         $sql = mysqli_query($conn, "INSERT INTO infos(fullname,email,username,password) VALUES ('$fullname', '$email', '$username','$password')");
    //         if($sql){
    //             echo "Inserted Successfully";
    //         }
    //         else{
    //             echo "Error in Insert";
    //         }
    //     }
    // }

    $conn->close();



    ?>
</body>

</html>