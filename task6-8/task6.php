<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 6</title>
</head>
<body>
<?php
function is_armstrong_number($number) {
    $original_number = $number;
    $sum = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, 3);
        $number = (int)($number / 10);
    }

    return $sum === $original_number;
}

$input_number = 407;

if (is_armstrong_number($input_number)) {
    echo $input_number . " is Armstrong Number";
} else {
    echo $input_number . " is not Armstrong Number";
}
?>
</body>
</html>