<?php
	session_start();
	
	$to = $_POST["mail"];
	$subject = 'Potwierdzenie rejestracji';
	$message = 'Link aktywacyjny:';
	$headers = 'From: BBCMS';
	mail($to,$subject,$message,$headers);
	
	$_SESSION['login']=$_POST['login'];
	$_SESSION['haslo']=$_POST['haslo'];
	$_SESSION['email']=$_POST['mail'];
	print_r($_SESSION);
	header('Location: wpis.php');
?>