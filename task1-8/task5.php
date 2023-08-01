<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 5</title>
</head>
<body>
<?php

function insert_item_in_array($input_array, $position, $new_item) {
    array_splice($input_array, $position - 1, 0, $new_item);
    return $input_array;
}

$original_array = array(1, 2, 3, 4, 5);
$location = 4;
$new_item = '$';

$result_array = insert_item_in_array($original_array, $location, $new_item);

echo implode(' ', $result_array);
?>
</body>
</html>