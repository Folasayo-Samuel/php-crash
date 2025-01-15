<?php
/* ------------------ PHP Data Types ---------------- */

/* 
- String    Series of characters surrounded by quotes
- Integer   Whole numbers
- Float     Decimal numbers
- Boolean   True or False
- Array    Special variable, which can hold more than one value
- Object    A class
- NULL      Empty variable
- Resourced Special variable, that holds a resource
 */

$name = 'Saint Vandora'; // String
$age = 30; // Integer
$has_kids = false; //Boolean
$cash_on_hand = 20.75; // Float

// var_dump($cash_on_hand);

// echo $name . ' is ' . $age . ' years old';

// echo "$name is $age years old";
// echo "${name} is ${age} years old.";

// $x = '5' + '5';
// var_dump($x);
// echo 10 - 5;
// echo 5 * 6;
// echo 10 / 2;
// echo 10 % 3;

/* ------------------ Constant ---------------- */
define('HOST','localhost');
define('DB_NAME', 'dev_db');

echo HOST . ':' . DB_NAME;