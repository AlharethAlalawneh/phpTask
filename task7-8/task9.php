<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 9</title>
</head>
<body>
    <?php
    $cookie_name = 'cookie_name';
    $cookie_value = 'cookie_value';
    $expiry_time = time() + 3600; // Expires in 1 hour
    $cookie_path = '/';
    $domain = 'example.com'; // Change this to your domain
    $secure = true; // Set to true if using HTTPS
    $httponly = true;
    
    setcookie($cookie_name, $cookie_value, $expiry_time, $cookie_path, $domain, $secure, $httponly);

    $all_cookies = $_COOKIE;
print_r($all_cookies);

$cookie_name = 'cookie_name';
$cookie_path = '/';
$domain = 'example.com'; // Change this to your domain

setcookie($cookie_name, '', time() - 3600, $cookie_path, $domain);
    ?>
</body>
</html>