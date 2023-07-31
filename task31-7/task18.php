<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$originalString = '2,543.12';

$processedString = str_replace(',', '', $originalString);

echo "Sample Output: '$originalString'\n";
echo "Expected Output: $processedString\n";
?>
</body>
</html>