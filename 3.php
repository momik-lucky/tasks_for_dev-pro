<?php
//3. Sum of all array elements

$input = array(2, 1, 2, 7, 9, array(4, 5, 5, 7, array(7, 8, 3, 4, 9)));

function sum($arr){
    $sum=0;
    foreach($arr as $recCall){
        if(is_array($recCall))
            $sum+= sum($recCall);
        else
            $sum += $recCall;
    }
    return $sum;
}

echo sum($input);
