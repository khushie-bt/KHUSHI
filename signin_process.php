<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $email = $_POST['email'];
  $password = $_POST['password'];


  if ($email === 'email@gmail.com' && $password === 'password123') {
    header('Location: main.html');
    exit;
  } else {
    header('Location: signup.html?error=1');
    exit;
  }
}
?>