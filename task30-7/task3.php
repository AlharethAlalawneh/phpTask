<!DOCTYPE html>
<html>
<head>
   <title>Task3</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>

<?php

$name = $_POST['name'];
echo "<h2> Hello $name </h2>";
?>

</body>

</html>