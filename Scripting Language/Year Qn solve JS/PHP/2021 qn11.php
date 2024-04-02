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

        if (!$regnum) {
            echo "Please input the reg num";
        } elseif (!$email) {
            echo "Please input the email";
        } else {
            // here the insert code goes
            echo "Perfect";
        }
    }
    ?>
</body>

</html>