<!-- Write a php program that receive a string in form then....-->
<!-- Write a php program that receive a string in form then....-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="s" placeholder="Your String">
        <input type="submit" value="Process">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $s = $_POST['s'];
        //convert string to lowercase and uppercase
        echo "<br> To lowercase: ". strtolower($s);
        echo "<br> To uppercase: ". strtoupper($s);
        //string first character uppercase
        echo "<br>First Letter capital: ". ucfirst($s);
        //reverse string
        echo "<br>The reversed string is: ".strrev($s);
        //length of string
        echo "<br>The length of string is: ". strlen($s);
        //First character of all words in the string to uppercase
        echo "<br>All first character of string uppercase: ". ucwords($s);
    }
    ?>
</body>

</html>