<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 10</title>
</head>
<body>
<?php

function convert_to_lowercase($input_array) {
    $lowercase_array = array_map('strtolower', $input_array);
    return $lowercase_array;
}

$colors = array("RED", "BLUE", "WHITE", "YELLOW");

$lowercase_colors = convert_to_lowercase($colors);

print_r($lowercase_colors);
?>
</body>
</html>