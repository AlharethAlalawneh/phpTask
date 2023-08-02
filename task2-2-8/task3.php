<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 3</title>
</head>
<body>
<?php
function calculateSum($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    
    if ($firstInteger === $secondInteger) {
        return "($firstInteger + $secondInteger) * 3 = " . ($sum * 3);
    } else {
        return "It is summertime!";
    }
}

$firstInteger = 2;
$secondInteger = 2;

echo calculateSum($firstInteger, $secondInteger);
?>
</body>
</html>