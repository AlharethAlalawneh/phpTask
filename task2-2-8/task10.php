<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 10</title>
</head>
<body>
<?php
function checkVotingEligibility($age) {
    if ($age >= 18) {
        return "is eligible to vote";
    } else {
        return "is not eligible to vote";
    }
}

$age = 15; 
echo "The person with age $age " . checkVotingEligibility($age);
?>
</body>
</html>