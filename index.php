<?php 

/** 
 * The below is a variable! 
 * We're setting the 'number' variable to equal 1.
 * 
 */
$number = 1;

/**
 * We use a double equals to COMPARE, and a single equals to ASSIGN.
 * Above, we ASSIGNED number to 1.
 * Below we're COMPARING $number to 1. 
 * 
 * the ($number == 1) is called the condition of the if statement.
 * If whatever is inside those parenthesis evaluates to TRUE,
 * the first block of code gets run. Else, the second.
 * Try changing the number variable above to see what happens!
 * 
 */
if ($number == 1) {
    echo "The number is $number";
} else {
    echo "You changed the number! It's $number now!";
}
