<!DOCTYPE html>
<html>
<head>
    <title>Task 1</title>
</head>
<body>
    <form method="post">
        <label>Enter a string: <input type="text" name="input_string"></label>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $inputString = $_POST["input_string"];

        $uppercaseString = strtoupper($inputString);

        $lowercaseString = strtolower($inputString);

        $firstLetterUppercase = ucfirst($inputString);

        $wordsCapitalized = ucwords($inputString);

        echo "<p>Uppercase: $uppercaseString</p>";
        echo "<p>Lowercase: $lowercaseString</p>";
        echo "<p>First letter uppercase: $firstLetterUppercase</p>";
        echo "<p>Words capitalized: $wordsCapitalized</p>";
    }
    ?>
</body>
</html>