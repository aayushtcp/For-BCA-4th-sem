<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        name: <input type="text" name="name">
        <input type="submit" name="postBtn">
    </form>

    <form action="" method="get">
        address: <input type="text" name="address">
        <input type="submit" name="getBtn">
    </form>


    <?php
    // Using POST
    if(isset($_POST["postBtn"])){
        $name = $_POST["name"];

        echo "$name";
    }

    // Using GET
    if(isset($_GET['getBtn'])){
        $address = $_GET['address'];
        echo "$address";
    }
    ?>
</body>

</html>