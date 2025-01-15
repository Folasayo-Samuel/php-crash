<?php

$age = 10;

// if($age >= 18){
//     echo 'You are old enough to vote.';
// }else {
//     echo 'You are not old enough to vote.';
// }

$t = date("H");

// if($t < 12){
//     echo "Good morning!";
// } elseif($t < 17){
//     echo "Good afternoon!";
// } else {
//     echo "Good evening!";
// }

// $posts = ['First Post'];

// if(!empty($posts)){
//     echo $posts[0];
// }else{
//     echo 'No posts found.';
// }

// echo !empty($posts) ? $posts[0] : 'No posts found.';

// $firstPost = !empty($posts) ? $posts[0] : 'No posts found.';
// $firstPost = !empty($posts) ? $posts[0] : null;
// $firstPost = $posts[0] ?? null;

// echo $firstPost;

$favcolor = 'red';

switch($favcolor){
    case 'red': 
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
    echo 'Your favorite color is neither red, blue, nor green';
};
