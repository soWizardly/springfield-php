<?php 

/** 
 * The below is still an array! 
 * We're using the range function that is built into PHP.
 * We're passing in the numbers 1 and 10 as parameters to the
 * function, so that it knows to create an array with 10 values
 * from 1 to 10.
 * 
 * Their are a ton of PHP functions available to you! 
 * Here's a good list to get you started:
 * https://www.php.net/manual/en/ref.array.php
 * 
 */
$numbers = range(1,10);

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        echo "$number is even!  ";
    } else {
        echo "$number is odd!  ";
    }
}
