<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--q1 for greatest check -->
    <form action="" method="post">
        <input type="text" name="numberone" placeholder="Number 1">
        <input type="text" name="numbertwo" placeholder="Number 2">
        <input type="text" name="numberthree" placeholder="Number 3">
        <input type="submit" value="Greatest">
    </form>
    <!--q2 even or odd  -->
    <h3>Even and odd q2</h3>
    <form action="" method="post">
        <input type="text" name="checknumber" placeholder="Number to check">
        <input type="submit" value="Check">
    </form>
    <!-- Write a php program to execute Basic mathemathical operation -->
    <h3>Math calculation</h3>
    <form action="" method="post">
        <input type="text" name="n1" placeholder="Number1">
        <select name="operator" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="n2" placeholder="Number 2">
        <input type="submit" value="Calculate">
    </form>
    <!-- Write a php program that receive a string in form then....-->
    <h3>String Manipulation</h3>
    <form action="" method="post">
        <input type="text" name="s" placeholder="Your String">
        <input type="submit" value="Process">
    </form>
    <?php
    // q1
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $n1 = $_POST['numberone'];
    //     $n2 = $_POST['numbertwo'];
    //     $n3 = $_POST['numberthree'];
    //     echo "<h2>Greatest is:" . max($n1, $n2, $n3) . "</h2>";
    // }


    // q2
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $evenodd = $_POST['checknumber'];
    //     if($evenodd%2==0){
    //         echo "<h2>Even</h2>";
    //     }else{
    //         echo "<h2>Odd</h2>";
    //     }
    // }


    // TODO: q3 Write a php program to execute Basic mathemathical operation
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $n1 = $_POST['n1'];
    //     $n2 = $_POST['n2'];
    //     $operator = $_POST['operator'];
    //     switch ($operator) {
    //         case "+":
    //             $result = $n1 + $n2;
    //             break;
    //         case "-":
    //             $result = $n1 - $n2;
    //             break;
    //         case "*":
    //             $result = $n1 * $n2;
    //             break;
    //         case "/":
    //             if ($n2 != 0) {
    //                 $result = $n1 / $n2;
    //             } else {
    //                 $result = "Cannot divide by zero";
    //             }
    //             break;
    //         default:
    //             $result = "Invalid operator";
    //     }
    //     echo "Result: $result";
    // }
    // TODO: q4 I am not going to do question 4
    // TODO q5: Write a php program that receive a string in form then....
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $s = $_POST['s'];
            echo "<h3>The reversed string is: ".strrev($s). "</h3>";
            echo "<h3>The UpperCase string is: ".strtoupper($s). "</h3>";
            echo "<h3>The LowerCase string is: ".strtolower($s). "</h3>";
            echo "<h3>The length of string is: ".strlen($s). "</h3>";
            echo "<h3>The first character upper string is: ".ucfirst($s). "</h3>";
            echo "<h3>The all words 1st char string is: ".ucwords($s). "</h3>";
        }
    // q6
    // q7
    // q8
    // q9
    // q10
    ?>
</body>

</html>