<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 8</title>
</head>
<body>
<?php
$text = "Orange Coding Academy";
$charToCount = 'c';

$count = 0;

for ($i = 0; $i < strlen($text); $i++) {
    if ($text[$i] === $charToCount) {
        $count++;
    }
}

echo $count;
?>
</body>
</html>