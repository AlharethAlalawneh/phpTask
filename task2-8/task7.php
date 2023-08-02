<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 7</title>
</head>
<body>
<?php
function fibonacci($limit) {
    $fibonacciSequence = array(0, 1);

    for ($i = 2; $i < $limit; $i++) {
        $nextNumber = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        $fibonacciSequence[] = $nextNumber;
    }

    return $fibonacciSequence;
}

$limit = 10; 
$fibonacciSequence = fibonacci($limit);

echo implode(', ', $fibonacciSequence);
?>
</body>
</html>