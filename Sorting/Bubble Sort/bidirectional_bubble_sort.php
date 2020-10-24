<?php

$unsorted = array(79,13,53,11,94,39,4,28,3,80);

/**
 * Swap function using a list asignment
 * @param $arr array 
 * @param $idx1 int
 * @param $idx2 int
 */
function swap(array &$arr, int $idx1, int $idx2){

    /**
     * Use list to assign values from a given array
     */
    list($arr[$idx1], $arr[$idx2]) = array($arr[$idx2],$arr[$idx1]);

}

/**
 * Bidirecctional Bubble Sort
 * TODO: implement using threads
 */
function bi_bubble_sort(array &$unsorted) : array{

    $swap = true;
    $array_count = count($unsorted) - 1;

    do{

        $swap = false;

        // sort left directional
        for($idx = 0; $idx <= $array_count; $idx++){

            $comp = $idx + 1;
            if(isset($unsorted[$comp]) && $unsorted[$idx] > $unsorted[$comp]){
                swap($unsorted,$idx, $comp);
                $swap = true;
                echo "swap left \n";
            }

        }

        // break if no sort
        if($swap == false){
            break;
        }

        // Sort right directional
        for($idx = $array_count; $idx >= 0; $idx--){

            $comp = $idx - 1;
            if(isset($unsorted[$comp]) && $unsorted[$idx] < $unsorted[$comp]){
                swap($unsorted, $idx, $comp);
                $swap = true;
                echo "swap right \n";
            }

        }

    }while($swap);

    // return array
    return $unsorted;

}

// print results
echo "\n";
$sorted = bi_bubble_sort($unsorted);
foreach($sorted as $val){
    echo $val, " ";
}
echo "\n";