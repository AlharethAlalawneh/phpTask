<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 9</title>
</head>
<body>
<?php
function add($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2) {
    return $num1 - $num2;
}

function multiply($num1, $num2) {
    return $num1 * $num2;
}

function divide($num1, $num2) {
    if ($num2 == 0) {
        return "Error: Division by zero is not allowed.";
    }
    return $num1 / $num2;
}

$operation = 'add'; 
$num1 = 10; 
$num2 = 5;

switch ($operation) {
    case 'add':
        $result = add($num1, $num2);
        break;
    case 'subtract':
        $result = subtract($num1, $num2);
        break;
    case 'multiply':
        $result = multiply($num1, $num2);
        break;
    case 'divide':
        $result = divide($num1, $num2);
        break;
    default:
        $result = "Invalid operation.";
}

echo "Result: " . $result;
?>
</body>
</html>