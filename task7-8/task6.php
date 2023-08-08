<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 6</title>
</head>
<body>
<?php echo (microtime(true) - 
$_SERVER['REQUEST_TIME_FLOAT']);
$time_start = microtime(true);

usleep(100);

$time_end = microtime(true);
$time = $time_end - $time_start;

echo "Did nothing in $time seconds\n";
?>

</body>
</html>