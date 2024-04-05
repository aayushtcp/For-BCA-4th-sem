<?php
// Custom Exception
class CustomException extends exception{
    public function customMessage(){
        return "Dividing by zero Exp". $this->getMessage();
    }
}

function divide($a,$b){
    if ($b == 0){
        throw new CustomException("Dividing by zero Exp");
    }
    else{
        $result = $a/$b;
        echo $result;
    }
}

try {
    divide(10,0);
} catch (Exception $th) {
    echo $th->getMessage();
}

?>