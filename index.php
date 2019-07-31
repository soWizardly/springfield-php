<?php 

/**
*  Make an array with 500 elements, and then write
*  a loop that echos to the screen that number + 2
*/

$array = range(0,500);

foreach ($array as $number) {
    echo $number + 2;
}
