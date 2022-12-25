<?php
session_start();
if ( $_SESSION[ 'user' ] ) {
  header( 'Location: profile.php' );
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Authorization and registration</title>
<link rel="stylesheet" href="/css/main.css">
</head>
<body>

<!-- Форма регистрации -->

<form action="include/signup.php" method="post" enctype="multipart/form-data">
  <label>Name</label>
  <input type="text" name="name" placeholder="Enter your name">
  <label>Login</label>
  <input type="text" name="login" placeholder="Enter your login">
  <label>Почта</label>
  <input type="email" name="email" placeholder="Enter your email">
  <label>Avatar</label>
  <input type="file" name="avatar">
  <label>Password</label>
  <input type="password" name="password" placeholder="Enter your password">
  <label>Cofirm password</label>
  <input type="password" name="password_confirm" placeholder="Confirm your password">
  <button type="submit" class="register-btn">Register</button>
  <p> Do you already have an account? - <a href="/">log in</a>! </p>
  <p class="msg none">Lorem ipsum.</p>
</form>
<script src="/js/jquery-3.4.1.min.js"></script> 
<script src="/js/main.js"></script>
</body>
</html>