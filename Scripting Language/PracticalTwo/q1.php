<!-- Note: You need XAMPP setup or any kind of PHP setup to run this programs in your system -->
<!-- IF you have XAMPP then put these files under "htdocs" folder to run it -->
<!-- Yeti ni garna aaudaina bhane na gar kei ni mugi -->


<!-- Write a php program to find the greatest number among three numbers -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="numberone" placeholder="Number 1">
        <input type="text" name="numbertwo" placeholder="Number 2">
        <input type="text" name="numberthree" placeholder="Number 3">
        <input type="submit" value="Greatest">
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