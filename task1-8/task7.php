<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 7</title>
</head>
<body>
<?php

function calculate_average_temperature($temperatures) {
    $total_temperatures = count($temperatures);
    $sum_temperatures = array_sum($temperatures);
    return $sum_temperatures / $total_temperatures;
}

function find_lowest_temperatures($temperatures, $count) {
    sort($temperatures);
    return array_slice($temperatures, 0, $count);
}

function find_highest_temperatures($temperatures, $count) {
    rsort($temperatures);
    return array_slice($temperatures, 0, $count);
}

$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$average_temperature = calculate_average_temperature($temperatures);

$lowest_temperatures = find_lowest_temperatures($temperatures, 5);
$highest_temperatures = find_highest_temperatures($temperatures, 5);

echo "Average Temperature is: " . number_format($average_temperature, 1) . PHP_EOL;
echo "List of five lowest temperatures: " . implode(", ", $lowest_temperatures) . PHP_EOL;
echo "List of five highest temperatures: " . implode(", ", $highest_temperatures) . PHP_EOL;
?>
</body>
</html>