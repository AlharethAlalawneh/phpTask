<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 11</title>
</head>
<body>
<?php
function getNextLetter($character) {
    if ($character === 'z') {
        return 'a';
    } elseif ($character >= 'a' && $character < 'z') {
        return chr(ord($character) + 1);
    } elseif ($character >= 'A' && $character < 'Z') {
        return chr(ord($character) + 1);
    } else {
        return $character;
    }
}

$sampleCharacter1 = 'a';
$sampleCharacter2 = 'z';

$nextCharacter1 = getNextLetter($sampleCharacter1);
$nextCharacter2 = getNextLetter($sampleCharacter2);

echo "Sample Character: '$sampleCharacter1'\n";
echo "Expected Output: $nextCharacter1\n";

echo "Sample Character: '$sampleCharacter2'\n";
echo "Expected Output: $nextCharacter2\n";
?>
</body>
</html>