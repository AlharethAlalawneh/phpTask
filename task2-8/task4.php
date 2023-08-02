<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 4</title>
</head>
<body>
<?php
$maxRows = 5;

for ($i = 0; $i < $maxRows; $i++) {
    $num = $i + 1;
    for ($j = 0; $j < $maxRows - $i; $j++) {
        echo $num . ' ';
    }

    for ($k = 0; $k <= $i; $k++) {
        echo $maxRows - $i . ' ';
    }

    echo PHP_EOL;
}
?>
</body>
</html>