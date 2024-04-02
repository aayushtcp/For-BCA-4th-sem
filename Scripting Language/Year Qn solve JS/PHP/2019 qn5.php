<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Get and Post PHP</h2>

    <form action="" method="post"> <!--change get post here -->
        Name: <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>
    <?php
    // post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_GET["name"];
        echo "$name";
    }
    // get
    // if ($_SERVER["REQUEST_METHOD"] == "GET") {
    //     $name = $_GET["name"];
    //     echo "$name";
    // }
    ?>
</body>

</html>