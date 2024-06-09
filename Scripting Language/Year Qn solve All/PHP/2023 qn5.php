<?php

$marks = array(
 "Ram" => array("OS"=>40, "NM" => 37, "SE"=>44, "DBMS"=>41, "SL"=>42),
 "Sita" => array("OS"=>26, "NM" => 37, "SE"=>34, "DBMS"=>46, "SL"=>42),
 "Hari" => array("OS"=>20, "NM" => 27, "SE"=>43, "DBMS"=>41, "SL"=>46)
);



foreach($marks as $key=>$value){
    $average = calculateAverage($value);
    echo "The average of $key is: ". $average . "\n";
}


function calculateAverage($value){
    $total = 0;
    $count = 0;

    foreach($value as $key => $value){
        $total += $value;
        $count++;
    }

    return $total/$count;
}

?>