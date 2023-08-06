<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 3</title>
</head>
<body>
<?php
function is_all_lowercase($str) {
    return $str === strtolower($str);
}

$input_string = "remove";

if (is_all_lowercase($input_string)) {
    echo "Your String is Ok";
} else {
    echo "Your String contains uppercase characters";
}
?>
</body>
</html>