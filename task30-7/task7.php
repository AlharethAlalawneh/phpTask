<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task7</title>
</head>

<body>
    <?php
    $text = 'PHP Tutorial';
    $text = preg_replace('/(\b[a-z])/i', '<span style="color:red;">\1</span>', $text);
    echo $text;
    ?>
</body>

</html>