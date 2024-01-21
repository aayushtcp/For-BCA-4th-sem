<!-- Write a php program to check the number is odd or even -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="checknumber" placeholder="Number to check">
        <input type="submit" value="Check">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $checknumber = $_POST['checknumber'];
            if($checknumber % 2 == 0){
                echo "<h1>Even</h1>";
            }else{
                echo "<h1>Odd</h1>";
            }
        }
    ?>
</body>
</html>