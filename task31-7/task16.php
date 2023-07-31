<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$originalString = '\"\1+2/3*2:2-3/4*3';

$processedString = preg_replace('/[^0-9\s]/', '', $originalString);

echo "Sample Output: '$originalString'\n";
echo "Expected Output: '$processedString'\n";
?>
</body>
</html>