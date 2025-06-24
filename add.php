<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'] ?? '';
  $email = $_POST['email'] ?? '';
  $feedback = $_POST['feedback'] ?? '';

  $sql = "INSERT INTO feedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";
  
  if ($conn->query($sql) === TRUE) {
    echo "thank you";
    exit();
  } else {
    echo "Error: " . $conn->error;
  }
}
?>
