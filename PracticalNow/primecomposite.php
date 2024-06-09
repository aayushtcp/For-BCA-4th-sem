<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Prime and Composite in PHP</h3>

    <?php
    function isPrime($number)
    {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    $number = 17;
    if (isPrime($number)) {
        echo "$number is a prime number.";
    } else {
        echo "$number is a composite number.";
    }
    ?>


</body>

</html>
