<?php

$unsorted = array(79,13,53,11,94,39,4,28,3,80);

/**
 * Swap function using list assingment
 */
function swap(array &$to_sort, $idx1, $idx2){

    /**
     * Using list to make assignment from constructed array
     */
    list($to_sort[$idx1],$to_sort[$idx2]) = array($to_sort[$idx2], $to_sort[$idx1]);
}

/**
 * Sorting function using a do while
 */
function bubble_sort(array &$unsorted): array{

    // swap idx
    $swap = true;
    do{

        $swap = false;
        // sort
        foreach($unsorted as $idx => $val){

            if(isset($unsorted[$idx + 1]) && $unsorted[$idx] > $unsorted[$idx + 1]){
                // swap
                swap($unsorted, $idx, $idx + 1);
                $swap = true;
            }

        }

    }while($swap);

    return $unsorted;

}


$sorted = bubble_sort($unsorted);

// print list
echo "\n";
foreach( $sorted as $val){
    echo $val," ";
}
echo "\n";