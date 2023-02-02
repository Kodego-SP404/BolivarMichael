
<!-- /* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/ -->

<?php

// echo "Hello World";
// echo "<br>";
// echo 123;

// echo '<h1>Hello</h1';

//print - similar to echo, but a bit slower
// print 'Hello';

//print_r - Gives a bit more info can be used to print arrays
// print_r('Hello');
// echo "<br>";
// print_r([1,2,3]);

//var_dump - More info data type and length
// var_dump('Hello');
// var_dump([1,2,3]);


// echo "Hello Pogi";
// echo "<br>";

$fname = 'KeL'; //string can be single or double
$age = 23; //integer
$hasKids = False; //Boolean
$cashOnHand = 10; //float

// echo "$fname is $age years old";
// ech0 $hasKids;
// var_dump($hasKids);
// echo $cashOnHand;
// var_dump($cashOnHand);

//This will not work
// echo '$fname is $age years old';

//concatenate strings
echo "$fname is $age years old";
echo "<br>";
echo $fname . ' is ' . $age . ' years old ';

