<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <form action="calculate.php" method="post">
        <input type="number" name="num1" required>
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" required>
        <input type="submit" value="Calculate">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];
    $result = 0;

    switch ($operation) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                echo "Cannot divide by zero.";
                exit;
            }
            break;
    }
}
?>

<h2>Calculation Result:</h2>
    <p><?php echo "$num1 $operation $num2 = $result"; ?></p>
    <a href="calculator.html">Back to Calculator</a>
</body>
</html>