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

<!-- Authorization -->

<form action="include/signin.php" method="post">
  <label>Login</label>
  <input type="text" name="login" placeholder="Enter your login">
  <label>Password</label>
  <input type="password" name="password" placeholder="Enter your password">
  <button type="submit" class="login-btn">Log in</button>
  <p> Don't you have an account? - <a href="/register.php ">register</a>! </p>
  <p class="msg none">what</p>
</form>
<script src="/js/jquery-3.4.1.min.js"></script> 
<script src="/js/main.js"></script>
</body>
</html>