<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset style="width: 500px;">
        <legend>Register</legend>
        <form action="" method="post">
            <label for="">*required fields</label>
            <br>
            <label for="">Your Full name*:</label>
            <br>
            <input type="text" name="fullname" required>
            <br><br>
            <label for="">Email Address*:</label>
            <br>
            <input type="text" name="email">
            <br><br>
            <label for="">User Name*:</label>
            <br>
            <input type="text" name="username">
            <br><br>
            <label for="">Password*:</label>
            <br>
            <input type="password" name="password">
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </fieldset>

    <?php
    $flag = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        if (strlen($fullname) > 10) {
            echo "less than 40 characters";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "email not valid";
        } else if (strlen($password) < 8) {
            echo "Password not valid";
        } else {
            // insert in db code yesma halam hai... ma paxi halxu
        }
    }
    ?>
</body>

</html>