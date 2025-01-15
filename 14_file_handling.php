<?php

/*
File handling is the ability to read and write files on the server.
PHP has built-in functions for reading and writing files.
*/

$file = 'extras/users.txt';

// Ensure the directory exists
// if (!is_dir('extras')) {
//     mkdir('extras', 0777, true); // Create the directory with appropriate permissions
// }

if (file_exists($file)) {
    $handle = fopen($file, 'r');
    if ($handle) {
        $contents = fread($handle, filesize($file));
        fclose($handle);
        echo $contents;
    } else {
        echo "Failed to open file for reading.";
    }
} else {
    $handle = fopen($file, 'w');
    if ($handle) {
        $contents = 'Brad' . PHP_EOL . 'Sara' . PHP_EOL . 'Mike';
        fwrite($handle, $contents);
        fclose($handle);
        echo "File created and written successfully.";
    } else {
        echo "Failed to open file for writing.";
    }
}
