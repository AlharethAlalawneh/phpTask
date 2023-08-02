<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 8</title>
</head>
<body>
<?php
function calculateElectricityBill($units) {
    if ($units <= 50) {
        $bill = $units * 2.50;
    } elseif ($units <= 150) {
        $bill = 50 * 2.50 + ($units - 50) * 5.00;
    } elseif ($units <= 250) {
        $bill = 50 * 2.50 + 100 * 5.00 + ($units - 150) * 6.20;
    } else {
        $bill = 50 * 2.50 + 100 * 5.00 + 100 * 6.20 + ($units - 250) * 7.50;
    }

    return $bill;
}

$units = 300; 
echo "Monthly Electricity Bill: " . calculateElectricityBill($units) . " JOD";
?>
</body>
</html>