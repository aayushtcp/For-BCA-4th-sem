<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="numberone">
        <input type="text" name="numbertwo">
        <input type="text" name="numberthree">
        <input type="submit" value="submit">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $n1 = $_POST['numberone'];
            $n2 = $_POST['numbertwo'];
            $n3 = $_POST['numberthree'];
            echo "<h1>Greatest: ". max($n1,$n2,$n3). "</h1>";
        }
    ?>
</body>

</html>