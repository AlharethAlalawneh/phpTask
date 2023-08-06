<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 8</title>
</head>
<body>
<?php
function remove_duplicates($array) {
    return array_unique($array);
}

$array1 = array(2, 4, 7, 4, 8, 4);

$result_array = remove_duplicates($array1);

print_r($result_array);
?>
</body>
</html>