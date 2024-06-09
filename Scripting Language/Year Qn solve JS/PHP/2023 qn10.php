<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name: <input type="text" class="name">
        <br><br>
        Email: <input type="text" class="email">
        <br><br>
        Gender:
        <br>
        Male:<input value="male" name="gender" type="radio">
        Female:<input value="female" name="gender" type="radio">
        <br><br>
        Education: <select name="education" id="education">
            <option value="p2">Plus 2</option>
            <option value="bachelors">Bachelors</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">
        <br>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $education = $_POST['education'];
            $gender = $_POST["gender"];
            echo "$education\n";
            echo "$gender";
        }
    
    ?>
</body>
</html>