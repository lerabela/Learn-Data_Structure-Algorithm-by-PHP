<?php

/**
 * Function will sort array using last char in string
 */

function sort_last_char(array &$usort): array{

    try{

        if(empty($usort) || count($usort) == 0){

            throw new \Exception("Invalid array, please check array and try agaian");

        }

        uasort($usort,function($val_1, $val_2) {

            if(!ctype_alpha($val_1) || !ctype_alpha($val_2)){

                return 0;
    
            }    

            if(substr($val_1,-1) > substr($val_2,-1)){

                return 1;

            }else if(substr($val_1,-1) < substr($val_2,-1)){

                return -1;

            }

            return 0;

        });

        return $usort;

    }catch(\Exception $e){

        exit($e->getMessage());
        echo "\n\n\n\n";

    }

}

$arr = ['orange', 'banana', 'apple','carrot', 'collard', 'pea'];

$sorted_arr = sort_last_char($arr);

foreach($sorted_arr as $val){

    echo $val . " ";

}

echo "\n\n\n\n";