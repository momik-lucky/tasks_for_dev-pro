<?php
//4. Function which will return all intersecting elements of two arrays

$array1 = array("7","41","36","77", "99", "3", "89");

$array2 = array("9","36","41","99", "77", "5", "3");

$final_array = array();

foreach($array1 as $key=>$val){
    if(in_array($val,$array2)){
        $final_array[] = $val;
    }
}

print_r($final_array);
