<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 5</title>
</head>
<body>
<?php
function isMultipleOfThree($number) {
    if ($number % 3 === 0) {
        return true;
    } else {
        return false;
    }
}

$number = 20;
if (isMultipleOfThree($number)) {
    echo "true";
} else {
    echo "false";
}
?>
</body>
</html>