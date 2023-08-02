<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 6</title>
</head>
<body>
<?php
function factorial($number) {
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}

$sampleInput = 5;
$factorial = factorial($sampleInput);
echo $factorial;
?>
</body>
</html>