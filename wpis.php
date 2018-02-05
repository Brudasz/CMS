<?php

	session_start();
	
	require_once "conn.php";
	$conn = @new mysqli($servername, $username, $password, $dbname);
	
	$login = $_SESSION['login'];
	$haslo = md5($_SESSION['haslo']);
	$mail = $_SESSION['email'];
	$zapytanie = "INSERT INTO administratorzycms (Login, Haslo, Email) VALUES ('$login', '$haslo', '$mail')";
	if ($conn->query($zapytanie) === TRUE) 
	{
		session_destroy();
		header('Location: index.php');
	} 
	else 
	{
		session_destroy();
		echo "Error: " . $zapytanie . "<br>" . $conn->error;
	}
?>