<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 12</title>
</head>
<body>
<?php
$originalString = 'The brown fox';
$toInsert = 'quick';
$insertPosition = 4;

$newString = substr_replace($originalString, $toInsert . ' ', $insertPosition, 0);

echo "Original String: '$originalString'\n";
echo "Insert '$toInsert' between 'The' and 'brown'.\n";
echo "Expected Output: '$newString'\n";
?>
</body>
</html>