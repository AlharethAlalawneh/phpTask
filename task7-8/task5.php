<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 5</title>
</head>
<body>
    <?php
    function chopExtension($filename) {
        return substr($filename, 0, strrpos($filename, '.'));
    }
    var_dump(chopExtension('bob.php')); 
    var_dump(chopExtension('bob.i.have.dots.zip'));
    ?>
</body>
</html>