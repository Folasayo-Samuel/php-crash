<?php
$string = 'Hello world!';

// Get the length of a string
echo strlen($string);

// Find the position of the last occurrence of a substring in a string
echo strpos($string, 'o');

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');

// Reverse a string
echo strrev($string);

// Convert all characters to lowercase
echo strtolower($string);

$string2 = '<script>alert(1)</script>';
echo htmlspecialchars($string2);

printf('%s likes to %s %s', 'John', 'Smith');
printf('1+1=%d', 1+1);
