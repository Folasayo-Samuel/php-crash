<?php
// Simple Array
$numbers = [1,44,55,22];
$fruits = array('apple', 'orange', 'pear');

// print_r($numbers);

// var_dump($fruits);
// echo $fruits[0];

$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

// echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#00f',
    'green' => '#0f0'
];

// echo $hex['blue'];

$person = [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@example.com',
];

// echo $person['first_name'];

$people = [
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@example.com'
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@example.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Jack',
        'email' => 'jack@example.com'
    ],
];

// echo $people[1]['email'];
var_dump(json_encode($people));


