<?php
// normal expection
try {
    $file = "myfile.php";
    if(!file_exists($file)){
        throw new Exception ("Hello The File does not exists!");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>