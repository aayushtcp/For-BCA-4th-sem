
<!DOCTYPE html>
<html>
<head>
    <title>Chess Board</title>
    <style>
        .board {
            width: 400px;
            height: 400px;
            display: flex;
            flex-wrap: wrap;
        }
        .square {
            width: 50px;
            height: 50px;
            box-sizing: border-box;
        }
        .white {
            background-color: #f0d9b5;
        }
        .black {
            background-color: #b58863;
        }
    </style>
</head>
<body>
    <div class="board">
        <?php
        for ($row = 0; $row < 8; $row++) {
            for ($col = 0; $col < 8; $col++) {
                $color = ($row + $col) % 2 == 0 ? 'white' : 'black';
                echo '<div class="square ' . $color . '"></div>';
            }
        }
        ?>
    </div>
</body>
</html>
