<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $company = $_POST['company'];
  $registration = $_POST['registration'];
  $password = $_POST['password'];

header('Location: index.html');
exit;

}
?>