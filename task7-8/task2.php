<!DOCTYPE html>
<html>
<head>
    <title>URL Redirector</title>
</head>
<body>
    <form action="redirect.php" method="post">
        Enter URL: <input type="text" name="url" placeholder="https://www.example.com"><br>
        <input type="submit" value="GO">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = $_POST["url"];

    if (filter_var($url, FILTER_VALIDATE_URL)) {
        header("Location: " . $url);
        exit;
    } else {
        echo "Invalid URL. Please enter a valid URL.";
    }
}
?>
</body>
</html>