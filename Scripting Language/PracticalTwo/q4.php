<!-- Write a php program to input name and address using form and display it -->
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Name here">
        <input type="text" name="address" placeholder="Address here">
        <input type="submit" value="Display">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $name = $_POST['name'];
            $address = $_POST['address'];
            echo "<h2>Name: $name</h2>";
            echo "<h2>Address: $address</h2>";
        }
    ?>
</body>
</html>