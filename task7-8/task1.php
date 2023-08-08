<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
</head>
<body>
    <form action="process.php" method="post">
        Email: <input type="email" name="email"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Submit">
    </form>
    
    <?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $email = $_GET["email"] ?? "";
    $password = $_GET["password"] ?? "";
    $method = "GET";
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";
    $method = "POST";
} else {
    $email = "";
    $password = "";
    $method = "Unknown";
}

// Sending an email (you can replace this with your own logic)
$to = "recipient@example.com";
$subject = "Form Submission - $method";
$message = "Email: $email\nPassword: $password\nMethod: $method";
$headers = "From: sender@example.com";

mail($to, $subject, $message, $headers);

echo "Form data submitted using $method method.";
?>
</body>
</html>