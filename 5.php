<?php
//5. Function will return only “even” array elements

$array = array("7","41","36","77", "99", "3", "89","36","77", "99");
for ($i=0; array_key_exists($i, $array); $i+=2) {
    echo $array[$i] . "\n";
}
