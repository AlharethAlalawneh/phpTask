<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 14</title>
</head>
<body>
<?php
$originalString = 'The quick brown fox jumps over the lazy dog';
$stringToRemove = 'fox';

$processedString = str_replace($stringToRemove, '', $originalString);

echo "Original String: '$originalString'\n";
echo "Remove '$stringToRemove' from the above string.\n";
echo "Expected Output: '$processedString'\n";
?>
</body>
</html>