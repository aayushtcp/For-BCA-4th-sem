<?php
class CustomException extends Exception{
    public function customMessage(){
        return "Dividing by zero Exp!".$this->getMessage();
    }
}

function divide($a,$b){
    if($a < 0 || $b < 0){
        throw new Exception("Negative Value Detected");
    }
    else if($b==0){
        throw new CustomException("Dividing by zero Exp!");
    }
    else{
        $res = $a/$b;
        echo "The result is: ". $res;
    }
}

try{
    divide(4,-2);
}catch(Exception $e){
    echo $e->getMessage();
}


?>