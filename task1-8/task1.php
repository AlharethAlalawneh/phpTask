<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 1</title>
</head>
<body>
<?php

$colors = ['red', 'green', 'white'];

function generate_paragraph($colors_array) {
    $paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$colors_array[0]} carpet, the {$colors_array[1]} lawn, the {$colors_array[2]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
    
    return $paragraph;
}

$generated_paragraph = generate_paragraph($colors);
echo $generated_paragraph;
?>
</body>
</html>