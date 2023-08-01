<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 9</title>
</head>
<body>
<?php

function convert_to_uppercase($input_array) {
    $uppercase_array = array_map('strtoupper', $input_array);
    return $uppercase_array;
}

$colors = array("red", "blue", "white", "yellow");

$uppercase_colors = convert_to_uppercase($colors);

print_r($uppercase_colors);
?>
</body>
</html>