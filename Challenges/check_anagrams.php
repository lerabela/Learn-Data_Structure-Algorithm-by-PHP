<?php

/**
 * The is_anagram() function should determine whether two words are anagrams.
 */

function is_anagram($wrd_1, $wrd_2){

    if(!ctype_alpha($wrd_1) || !ctype_alpha($wrd_2)){
        return null;
    }

    if(count_chars($wrd_1,1) == count_chars($wrd_2,1)){
        return "This two strings are anagram";
    }

    return "This two strings are not anagram";

}

print_r(is_anagram('anagram','nagaram')."\n");
print_r(is_anagram('cat','rat')."\n");