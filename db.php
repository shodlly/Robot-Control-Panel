<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_control"; 

// إنشاء اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// فحص الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
