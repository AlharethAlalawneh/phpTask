<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 11</title>
</head>
<body>
<?php

$start_number = 200;
$end_number = 250;

for ($i = $start_number; $i <= $end_number; $i++) {
    if ($i % 4 === 0) {
        echo $i;
        if ($i < $end_number && $i + 4 <= $end_number) {
            echo ',';
        }
    }
}
?>
</body>
</html>