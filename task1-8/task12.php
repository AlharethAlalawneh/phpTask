<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 12</title>
</head>
<body>
<?php

function find_shortest_longest_length($input_array) {
    $shortest = PHP_INT_MAX;
    $longest = 0;

    foreach ($input_array as $word) {
        $word_length = strlen($word);
        if ($word_length < $shortest) {
            $shortest = $word_length;
        }
        if ($word_length > $longest) {
            $longest = $word_length;
        }
    }

    return array($shortest, $longest);
}

$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

list($shortest_length, $longest_length) = find_shortest_longest_length($words);

// Display the output
echo "The shortest array length is $shortest_length. The longest array length is $longest_length.";
?>
</body>
</html>