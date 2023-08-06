<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 5</title>
</head>
<body>
<?php
function swap_variables(&$x, &$y) {
    list($x, $y) = array($y, $x);
}

$x = 12;
$y = 10;

swap_variables($x, $y);

echo "x = " . $x . "\n";
echo "y = " . $y . "\n";
?>
</body>
</html>