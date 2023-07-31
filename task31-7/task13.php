<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 13</title>
</head>
<body>
<?php
$originalString = '0000657022.24';

$processedString = ltrim($originalString, '0');

echo "Original String: '$originalString'\n";
echo "Expected Output: '$processedString'\n";
?>
</body>
</html>