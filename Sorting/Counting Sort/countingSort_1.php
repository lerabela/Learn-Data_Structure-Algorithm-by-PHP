<?php

$randomSeq = array(5,14,3,2,23,3,40,38,3,4,41,8,18);

/**
 * Counting Sort algorithm for positve intergers
 * @param $rand Array
 * @return Array sorted array
 */
function countingSort(array &$rand): array{

    // output array
    $output = array(count($rand));

    /**
     * unsorted array size [$rand] - for [n] elements
     * Total size of [n] elements in the unsorted array 
     */
    $array_size = count($rand);

    /**
     * find the max value in the range of [n] elements
     */
    $max_val = max($rand);

    /**
     * create counting slots - for [k] elements in range
     * In this instance [k] will equal the max value in 
     * range.
     */
    $count = array_fill(0, $max_val + 1,0);

    /**
     * Count all occurances of range items within the given array 
     * Range in this instance will be from 0 - (k + 1), with k being
     * the max value from the given array.
     */
    foreach($rand as $key => $val){

        /**
         * Increament value correponding to value
         * i.e $count[2]++
         */
        $count[$val]++;

    }

    /**
     * Store the cummulative count of each element
     * Iterate count array and set start index position of 
     * counted elements.
     */
    for($idx = 1; $idx <= $max_val; $idx++){

        /**
         * We are adding the previous index's count 
         * to the current count. This will continue 
         * for [k] range of elements. 
         */
        $count[$idx] = ($count[$idx] + $count[$idx - 1]);

    }

    // Find the index of each element
    for ($idx = $array_size - 1; $idx >= 0; $idx--) {

        /**
         * So we use the value at the current index pointed to. 
         * We then grap its cummulative value
         * and adjust to correct position, by subtracting 1.
         */
        $index = ($count[$rand[$idx]] - 1); 

        /**
         * We then store the value from the original
         * array in the adjusted postion.
         */
        $output[$index] = $rand[$idx];

        /**
         * We then decreament the current stored value to reflect 
         * the moved value.
         */
        $count[$rand[$idx]]--;

    }


    // Copy the sorted array into the original array
    for($idx = 0; $idx <= $array_size - 1; $idx++){

        // move to correct position
        $rand[$idx] = $output[$idx];

    }

    return $rand;

}

print_r(countingSort($randomSeq));