<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 4</title>
</head>
<body>
<?php
function swap_variables(&$x, &$y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

$x = 12;
$y = 10;

swap_variables($x, $y);

echo "x = " . $x . "\n";
echo "y = " . $y . "\n";
?>
</body>
</html>