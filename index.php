<?php 

/** 
 * The below is an array! 
 * We're setting the 'numbers' variable to equal
 * to an array of integer values!
 * 
 */
$numbers = [1,2,3,4,5];

/**
 * 
 * We are looping through each element of the array
 * with the 'foreach' loop! We need to be able
 * to write code that references the number we're on
 * in the loop, so we write ($numbers as $number) 
 * to say that when we use $number, we mean the one we're
 * on now.
 * 
 * Try adding more numbers to the array above!
 * 
 */

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        echo "$number is even!  ";
    } else {
        echo "$number is odd!  ";
    }
}
