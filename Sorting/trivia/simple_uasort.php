<?php

/**
 * Simple uasort example
 */

function simpple_sort(array &$usort): array{

    try{

        if(empty($usort) || count($usort) == 0){

            throw new \Exception("Invalid array, please check array");

        }

        uasort($usort,function($val_1, $val_2){

            if($val_1 > $val_2){

                return 1;

            }else if($val_1 < $val_2){

                return -1;

            }

            return 0;

        });

        return $usort;

    }catch(\Exception $e){

        exit($e->getMessage());
        echo "\n\n";

    }

}

$arr = array("a" => 4,"b" => 2,"c" => 8,"d" => 6);

$sorted = simpple_sort($arr);

foreach($sorted as $ky => $vl){
    
    echo "key = " . $ky . " : " . " value = " . $vl ."\n";

}

echo "\n\n";