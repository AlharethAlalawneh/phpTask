<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 2</title>
</head>
<body>
<?php
function reverse_string($str) {
    $reversed = '';
    $length = strlen($str);

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }

    return $reversed;
}

$input_string = "remove";
$reversed_string = reverse_string($input_string);
echo "Expected Output: " . $reversed_string;
?>
</body>
</html>