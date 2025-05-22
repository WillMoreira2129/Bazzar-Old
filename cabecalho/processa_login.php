<?php
session_start();

$username = $_POST['rafael'];
$password = $_POST['1234'];

if ($userExists && $senhaValida) {
  $_SESSION['user_id'] = $user_id;
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
  header('Location: dashboard.php');
  exit();
} else {
  header('Location: index.php?error=1');
  exit();
}
?>