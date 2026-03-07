<?php
include  ('config/db_connect.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute an INSERT statement
$stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>


