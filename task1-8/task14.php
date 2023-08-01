<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 14</title>
</head>
<body>
<?php

function find_lowest_non_zero_integer($input_array) {
    $lowest = PHP_INT_MAX;

    foreach ($input_array as $number) {
        if ($number !== 0 && $number < $lowest) {
            $lowest = $number;
        }
    }

    return $lowest;
}

$array1 = array(2, 0, 10, 12, 6);

$lowest_non_zero_integer = find_lowest_non_zero_integer($array1);

echo $lowest_non_zero_integer;
?>
</body>
</html>