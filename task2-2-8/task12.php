<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 12</title>
</head>
<body>
<?php
function calculateGrade($scores) {
    $totalScores = count($scores);
    if ($totalScores === 0) {
        return "No grades available.";
    }

    $totalSum = array_sum($scores);
    $average = $totalSum / $totalScores;

    if ($average < 60) {
        return 'F';
    } elseif ($average < 70) {
        return 'D';
    } elseif ($average < 80) {
        return 'C';
    } elseif ($average < 90) {
        return 'B';
    } else {
        return 'A';
    }
}

$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50]; 
echo calculateGrade($scores);
?>  
</body>
</html>