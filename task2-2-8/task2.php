<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 2</title>
</head>
<body>
<?php
function checkSeason($temperature) {
    if ($temperature < 20) {
        return "It is winter time!";
    } else {
        return "It is summer time!";
    }
}

$temperature = 27; 
echo checkSeason($temperature);
?>
</body>
</html>