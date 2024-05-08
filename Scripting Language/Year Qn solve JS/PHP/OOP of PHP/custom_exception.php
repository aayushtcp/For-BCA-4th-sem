
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

// use CustomException as GlobalCustomException;s

class customException extends Exception{
    function customMessage(){
        return "Dividing by zero".$this->getMessage();
    }
}

function divide($a,$b){
    if($b==0){
        throw new CustomException();
    }
    else if($a<0 && $b<0){
        throw new Exception("both below 0");
    }
    else{
        echo $a/$b;

    }
}

try{
    divide(8,0);

}catch(Exception $e){
    echo $e->getMessage();
}
?>
    
</body>
</html>



