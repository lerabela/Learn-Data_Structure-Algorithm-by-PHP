<?php

/**
 * Check if a string is a Palindrome
 */
function check_palindrome(string $str): string{

    try{

        if(strrev($str) == $str){

            return "Is Palindrome";

        }else{

            return "Not Palindrome";

        }

    }catch(\Exception $e){

        exit($e->getMessage());
        echo "\n\n";

    }

}

echo check_palindrome("DAD");
echo "\n\n";
echo check_palindrome("MALAYALAM");
echo "\n\n";
echo check_palindrome("MALAYAAM");
echo "\n\n";