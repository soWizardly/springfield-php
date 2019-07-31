<?php 

/**
 * Classes allow us to write code once, and use it in 
 * many other places easily!
 * 
 * Classes allow us to hide confusing code behind easy
 * to understand plain english!
 * 
 * Classes are what allow us to easily copy + paste other people's
 * code!
 * 
 * Classes are amazing! Let's make one!
 * 
 * Let's say we were writing some code to define different
 * kinds of pizza on our new website.
 * 
 */

 include "classes/Pizza.php";

$product = new Pizza();
$product->name = "Pepperoni";
$product->price = 10.00;
$product->cook_time_minutes = 30;

echo $product->name;