<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 7</title>
</head>
<body>
<?php
function is_palindrome($str) {
    $cleaned_str = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($str));
    $reversed_str = strrev($cleaned_str);

    return $cleaned_str === $reversed_str;
}

$input_string = "Eva, can I see bees in a cave?";

if (is_palindrome($input_string)) {
    echo "Yes, it is a palindrome";
} else {
    echo "No, it is not a palindrome";
}
?>
</body>
</html>