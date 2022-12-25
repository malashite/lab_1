<?php
session_start();
if ( !$_SESSION[ 'user' ] ) {
  header( 'Location: /' );
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Profile</title>
<link rel="stylesheet" href="/css/main.css">
</head>
<body>

<!-- Profile -->

<form>
  <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" style="text-align: center" class="circle" alt="">
  <h2 style="margin: 10px 0;">
    <?= $_SESSION['user']['name'] ?>
  </h2>
  <a href="#">
  <?= $_SESSION['user']['email'] ?>
  </a> <a href="include/logout.php" class="logout">Log out</a
	
</form
	
</body
	
</html>