<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 11</title>
</head>
<body>
<?php
function checkNumber($number) {
    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}

$number = -60; 
echo checkNumber($number);
?>
</body>
</html>