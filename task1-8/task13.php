<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 13</title>
</head>
<body>
<?php

function generate_unique_random_numbers($min, $max, $count) {
    $unique_numbers = array();
    $range = range($min, $max);

    if ($count > ($max - $min + 1)) {
        return false; 
    }

    while (count($unique_numbers) < $count) {
        $random_index = array_rand($range);
        $random_number = $range[$random_index];
        
        if (!in_array($random_number, $unique_numbers)) {
            $unique_numbers[] = $random_number;
        }
    }

    return $unique_numbers;
}

$min_range = 11;
$max_range = 20;
$number_count = 10;

$unique_random_numbers = generate_unique_random_numbers($min_range, $max_range, $number_count);

echo implode(' ', $unique_random_numbers);
?>
</body>
</html>