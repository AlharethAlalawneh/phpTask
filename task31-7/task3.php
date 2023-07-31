<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
</head>
<body>
<?php
$sentence = 'I am a full stack developer at orange coding academy';
$sampleWord = 'Orange';

$lowercaseSentence = strtolower($sentence);
$lowercaseSampleWord = strtolower($sampleWord);

if (strpos($lowercaseSentence, $lowercaseSampleWord) !== false) {
    echo "Word Found!";
} else {
    echo "Word Not Found!";
}
?>
</body>
</html>