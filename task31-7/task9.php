<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 9</title>
</head>
<body>
<?php
$string1 = 'dragonball';
$string2 = 'dragonboll';

$length = min(strlen($string1), strlen($string2));

for ($i = 0; $i < $length; $i++) {
    if ($string1[$i] !== $string2[$i]) {
        $position = $i + 1;
        $char1 = $string1[$i];
        $char2 = $string2[$i];
        break;
    }
}

if (!isset($position)) {
    $position = $length + 1;
    $char1 = $string1[$length];
    $char2 = $string2[$length];
}

echo "String1: '$string1'\n";
echo "String2: '$string2'\n";
echo "Expected Result: First difference between two strings at position $position: \"$char1\" vs \"$char2\"\n";
?>
</body>
</html>