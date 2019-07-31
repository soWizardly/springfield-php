<?php

/**
* This is how we define a simple class in PHP.
* Classes can have properties and methods.
* Methods are just functions inside of a class,
* and work pretty much the same as regular functions.
*
*/

class Pizza {

    // This is a property. 
    public $name,$price,$cook_time_minutes;

    // This is a method.
    public function cookTimeHours() 
    {
        return round($this->cook_time_minutes / 60, 2);
    }

}
