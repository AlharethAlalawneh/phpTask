<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 2</title>
</head>
<body>
<?php

$colors = array('white', 'green', 'red');

function display_colors_as_list($colors_array) {
    echo '<ul>';
    foreach ($colors_array as $color) {
        echo "<li>$color</li>";
    }
    echo '</ul>';
}

display_colors_as_list($colors);
?>
</body>
</html>