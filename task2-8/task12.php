<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 12</title>
</head>
<body>
<?php
function printPattern($size) {
    for ($i = 1; $i <= $size; $i++) {
        for ($space = $size - $i; $space >= 1; $space--) {
            echo " ";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . " ";
        }
        echo PHP_EOL;
    }

    for ($i = $size - 1; $i >= 1; $i--) {
        for ($space = $size - $i; $space >= 1; $space--) {
            echo " ";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . " ";
        }
        echo PHP_EOL;
    }
}

$size = 5; 
printPattern($size);
?>
</body>
</html>