<?php
$conn = new mysqli("localhost", "root", "", "test");

$stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
$stmt->bind_param("ss", $user, $pass);

$user = $_POST['username'];
$pass = $_POST['password'];

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  echo "Login success";
} else {
  echo "Invalid";
}
?>
