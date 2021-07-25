<?php 

	session_start();
	unset($_SESSION['ROLE']) ;
    unset($_SESSION['is_login']);
    header('location: login.php');
    die();

?>