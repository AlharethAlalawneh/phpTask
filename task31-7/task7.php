<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 7</title>
</head>
<body>
<?php
$charset = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

function generateRandomPassword($charset, $length = 8) {
    $charsetLength = strlen($charset);
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, $charsetLength - 1);
        $password .= $charset[$randomIndex];
    }

    return $password;
}

$randomPassword = generateRandomPassword($charset, 8);
echo "Sample Output: $randomPassword\n";
?>
</body>
</html>