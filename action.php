<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $command = $_POST['command'];

    include 'db.php';

    $stmt = $conn->prepare("INSERT INTO commands (command) VALUES (?)");
    $stmt->bind_param("s", $command);

    if ($stmt->execute()) {
        $message = "تم حفظ الأمر بنجاح!";
    } else {
        $message = "حدث خطأ أثناء حفظ الأمر: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action</title>
</head>
<body>
    <div style="text-align: center; margin-top: 20%;">
        <h1><?php echo htmlspecialchars($command); ?></h1>
        <p><?php echo htmlspecialchars($message); ?></p>
        <a href="index.php">Go Back</a>
    </div>
</body>
</html>
