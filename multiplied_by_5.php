<?php

function multiply($A, $mult_by){   
    
    foreach($A as $value)
    {
        $new_array[] = $value * $mult_by;
    }
    return $new_array;
}

$A = array(2,4,10,16);

$B = multiply($A, 5);
var_dump($B);

?>