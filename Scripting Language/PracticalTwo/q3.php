<!-- Write a php program to execute Basic mathemathical operation -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculator PHP</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="num1" placeholder="Enter first number" required>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="num2" placeholder="Enter second number" required>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero";
                }
                break;
            default:
                $result = "Invalid operator";
        }
        echo "Result: $result";
    }
    ?>

</body>

</html>
