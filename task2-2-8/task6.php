<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 6</title>
</head>
<body>
<?php
function isInRange($number) {
    if ($number >= 20 && $number <= 50) {
        return true;
    } else {
        return false;
    }
}

$number = 50;
if (isInRange($number)) {
    echo "true";
} else {
    echo "false";
}
?>
</body>
</html>