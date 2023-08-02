<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 4</title>
</head>
<body>
<?php
function checkSum($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    
    if ($sum === 30) {
        return $sum;
    } else {
        return false;
    }
}

$firstInteger = 10;
$secondInteger = 10;

$result = checkSum($firstInteger, $secondInteger);

if ($result !== false) {
    echo $result;
} else {
    echo "false";
}
?>
</body>
</html>