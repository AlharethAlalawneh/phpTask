<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 5</title>
</head>
<body>
<?php
$email = 'info@orange.com';

$emailParts = explode('@', $email);

$username = $emailParts[0];

echo "Sample Output: '$email'\n";
echo "Expected Output: $username\n";
?>
</body>
</html>