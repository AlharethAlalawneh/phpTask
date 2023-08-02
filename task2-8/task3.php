<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 3</title>
</head>
<body>
<?php
$alphabet = range('A', 'E');
$maxRows = 5;

for ($i = 0; $i < $maxRows; $i++) {
    for ($j = 0; $j < $maxRows - $i; $j++) {
        echo $alphabet[$i] . ' ';
    }

    for ($k = 0; $k <= $i; $k++) {
        echo $alphabet[$maxRows - $i] . ' ';
    }

    echo PHP_EOL;
}
?>
</body>
</html>