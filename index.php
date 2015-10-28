<?php 
	session_start();
	if (!$_SESSION['FBID']) {
		header('location:fb/index.php');
	}
	else{
		header('location:fb/index.php');	
	}
?>

