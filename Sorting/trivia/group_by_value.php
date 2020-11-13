<?php

/**
 * group array
 */
$arr = array(
"chimpanzee" => 20,
"meeting" => 50,
"dynasty" => 20,
"chocolate" => 20,
"bananas" => 50,
"fantasy" => 30,
"football" => 20
);


function group_by_value(array &$arr): array{

    $results = [];

    foreach($arr as $key => $val){

        $results[$val][] = $key;

    }

    return $results;

}

print_r(group_by_value($arr));