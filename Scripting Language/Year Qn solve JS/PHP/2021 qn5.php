<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .white {
        background-color: gray;
    }

    .black {
        background-color: #333;
    }

    .box {
        height: 400px;
        width: 400px;
        display: flex;
        flex-wrap: wrap;
    }

    .square {
        width: 50px;
        height: 50px;
        box-sizing: border-box;
    }
</style>

<body>

    <div class="box">
        <?php
        for ($i = 0; $i < 8; $i++) {
            for ($j = 0; $j < 8; $j++) {
                $color = ($i + $j) % 2 == 0 ? "white" : "black";
                echo '<div class="square ' . $color .   '"></div>';
            }
        }
        ?>
    </div>

</body>

</html>