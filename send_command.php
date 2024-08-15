<?php
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = "";     // Default XAMPP password
$dbname = "robot_control";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);
$command = $data['command'];

$sql = "INSERT INTO commands (command) VALUES ('$command')";

if ($conn->query($sql) === TRUE) {
  echo "Command '$command' sent to database!";

  // *** ROBOT COMMUNICATION LOGIC GOES HERE ***
  // Example (replace with your robot's specific code):
  // if ($command === 'forward') { 
  //   // Code to send the "forward" command to your robot 
  // } 

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>