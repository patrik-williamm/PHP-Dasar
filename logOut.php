
<?php
 	session_start();

 	$_SESSION = [];
 	session_unset();
 	session_destroy();

 	setcookie("test", "", time()-3600);
 	setcookie("my", "", time()-3600);
 	header('location: login.php?status=logout');
 	exit();