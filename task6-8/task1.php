<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 1</title>
</head>
<body>
<?php
function is_prime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

$input_number = 3;

if (is_prime($input_number)) {
    echo $input_number . " is a prime number";
} else {
    echo $input_number . " is not a prime number";
}
?>
</body>
</html>