<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TU Register</title>
</head>

<body>
    <fieldset>
        <legend>Tu Registration</legend>
        <form action="" method="post" enctype="multipart/form-data">
            TU Registration: <input type="text" name="regnum">
            <br>
            <br>
            Email: <input type="text" name="email">
            <br>
            <br>
            Image: <input type="file" name="image">
            <br>
            <br>
            <input type="submit" value="Upload">
        </form>
    </fieldset>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $regnum = trim($_POST["regnum"]);
        $email = trim($_POST["email"]);
        $image = $_FILES['image'];

        if (!$regnum || !$email) {
            echo "empty detected ";
        } else {
            // $conn = new mysqli("localhost", "root", "" , "nameofdb");
            // if ($conn->connect_error){
            //     die("DB not connecting".$conn->connect_error);
            // }
            $type = ['image/png', 'image/jpg', 'image/jpeg'];


            if (!empty($reqnum) || !empty($email) || !empty($image)) {

                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "email is in proper format! Please uncorrect the email";
                }
                else if ($_FILES['image']['error'] == 0) {
                    if ($_FILES['image']['size'] < 5242880) {
                        if (in_array($_FILES['image']['type'], $type)) {
                            echo "All fine image";
                        } else {
                            echo "type error";
                        }
                    } else {
                        echo "size is above 5 mb";
                    }
                }
            
            }
            else{
                echo "empty detecsted";
            }
        }
    }
    ?>
</body>

</html>