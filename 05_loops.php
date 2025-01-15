<?php
// for($x = 0; $x <= 10; $x++){
//     echo 'Number ' . $x . '<br>';
// }

// $x = 1;

// while($x <= 15){
//     echo 'Number ' . $x . '<br>';
//     $x = $x + 1;
// }

// $x = 1;

// do {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// } while($x <= 5);

// $posts = ['First Post', 'Second Post', ' Third Post'];

// for($x = 0; $x < count($posts); $x++){
//     echo $posts[$x];
// }

// foreach($posts as $post){
//     echo $post;
// }

// foreach($posts as $index => $post){
//     echo $index + 1 . ' - ' . $post . '<br>';
// }

$person = [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'age' => 30,
    'city' => 'New York',
    'email' => 'john@example.com'
];

foreach($person as $key => $value){
    echo "$key - $value<br>";
}