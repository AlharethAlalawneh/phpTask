<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 8</title>
</head>
<body>
<?php
$sentence = 'That new trainee is so genius.';
$sampleWord = 'Our';

$words = explode(' ', $sentence);

$words[0] = $sampleWord;

$newSentence = implode(' ', $words);

echo "Sample Output: '$sentence'\n";
echo "Expected Result: $newSentence\n";
?>
</body>
</html>