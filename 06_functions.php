<?php
$y = 12;
function registerUser($email){
//     global $y;
//     $x = 10;
//     echo $y;
//     echo 'User registered';
echo $email . ' registered';
}

// echo $x;
// registerUser('Brad');

// function sum($n1 = 4, $n2 = 5){
//     return $n1 + $n2;
// }

// $number = sum();
// echo $number;

// Annonymous function
$subtract = function($n1, $n2){
    return $n1 - $n2;
};


// echo $subtract(10, 5);

// Arrow functions
$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(10, 5);