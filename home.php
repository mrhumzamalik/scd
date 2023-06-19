<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Check username and password
  if ($username == "admin" && $password == "password") {
    $_SESSION["username"] = $username;
    header("Location: dashboard.php");
    exit();
  } else {
    $error = "Invalid username or password";
  }
}
?>