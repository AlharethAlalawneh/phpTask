<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$originalString = 'The quick brown fox jumps over the lazy dog';

$words = explode(' ', $originalString);

$selectedWords = array_slice($words, 0, 5);

$selectedString = implode(' ', $selectedWords);

echo "Sample Output: '$originalString'\n";
echo "Expected Output: '$selectedString'\n";
?>
</body>
</html>