<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>
    <form action="todolist.php" method="post">
        <input type="text" name="task" placeholder="Enter a task">
        <button type="submit" name="addTask">Add</button>
    </form>
    <ul>
        <?php include 'todolist.php'; ?>
    </ul>

    <?php
$taskList = [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addTask"])) {
    $task = trim($_POST["task"]);
    if (!empty($task)) {
        $taskList[] = $task;
        saveTaskListToFile();
    }
}

if (file_exists("tasks.txt")) {
    $taskList = file("tasks.txt", FILE_IGNORE_NEW_LINES);
}

function saveTaskListToFile() {
    global $taskList;
    file_put_contents("tasks.txt", implode(PHP_EOL, $taskList));
}

foreach ($taskList as $task) {
    echo "<li>$task</li>";
}
?>
</body>
</html>