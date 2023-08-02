<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 1</title>
</head>
<body>
<?php
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
        return true;
    } else {
        return false;
    }
}

$year = 2013; 
if (isLeapYear($year)) {
    echo "This year is a leap year";
} else {
    echo "This year is not a leap year";
}
?>
</body>
</html>