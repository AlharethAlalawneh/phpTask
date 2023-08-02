<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 7</title>
</head>
<body>
<?php
function findLargest($numbers) {
    if (count($numbers) !== 3) {
        return "Error: Please provide exactly three integers.";
    }

    $largest = $numbers[0];

    foreach ($numbers as $number) {
        if ($number > $largest) {
            $largest = $number;
        }
    }

    return $largest;
}

$numbers = [1, 5, 9]; 
echo findLargest($numbers);
?>
</body>
</html>