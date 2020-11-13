<?php

/**
 * Separate odd and even number
 */

// input array  
$input = array(4, 3, 6, 5, 8, 7, 2); 

$even = array_filter($input,function($val){

    return ($val % 2 == 0)? 1 : -1;

});

$odd = array_filter($input,function($val){

    return ($val % 2 != 0)? 1 : -1;

});

print_r($even);