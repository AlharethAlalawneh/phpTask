<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 5</title>
</head>
<body>
<?php
$maxRows = 5;

for ($i = 0; $i < $maxRows; $i++) {
    for ($j = 0; $j < $maxRows; $j++) {
        if ($i === $j) {
            echo ($i + 1) . ' ';
        } else {
            echo '0 ';
        }
    }
    echo PHP_EOL;
}
?>
</body>
</html>