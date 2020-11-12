<?php

/**
 * Function will sort array using a predicate index
 */

function index_sort(array &$sort, int $idx): array{

    try{

        if(empty($sort) || count($sort) == 0){

            throw new \Exception("Invalid array, please check array and try again");

        }

        uasort($sort, function($val_1, $val_2) use($idx) {

            if(!ctype_alpha($val_1) || !ctype_alpha($val_2)){

                return null;

            }

            if(substr($val_1, $idx) > substr($val_2, $idx)){

                return 1;

            }else if( substr($val_1, $idx) < substr($val_2, $idx) ){

                return -1;

            }

            return null;

        });

        return $sort;

    }catch(\Exception $e){

        exit($e->getMessage());
        echo "\n\n";

    }

}

$arr = ['orange', 'banana', 'apple','carrot', 'collard', 'pea'];

$sorted = index_sort($arr, 2);

foreach($sorted as $val){

    echo $val . " ";

}

echo "\n\n";