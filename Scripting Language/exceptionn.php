<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello aayush exception</h1>
<?php
    class customException extends Exception{
        public function errorMessage() { 
            // error errorMessage
            $errorMsg = 'Error on line ' . $this->getLine().' in '. $this->getFile().': <b>'. $this->getMessage().'</b> is not a valid email address';
            return $errorMsg;
        }
    }

    $email = "something@example.com";

    try{
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
            throw new customException($email);
        }
        if(strpos($email, "example")!== FALSE){
            throw new Exception("$email is not a valid email address");
        }
    }
    catch(customException $e){
        echo $e->errorMessage();
    }

    catch(Exception $e){
        echo $e->getMessage();
    }

?>
</body>
</html>

