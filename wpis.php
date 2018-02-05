<?php

	require_once "conn.php";
	$conn = @new mysqli($servername, $username, $password, $dbname);
		
	$login = $_POST["login"];
	$haslo = $_POST["haslo"];
	$haslo = md5($haslo);
	$zapytanie = "INSERT INTO administratorzycms (Login, Haslo) VALUES ('$login', '$haslo')";
	if ($conn->query($zapytanie) === TRUE) 
	{
		header('Location: index.php');
	} 
	else 
	{
		echo "Error: " . $zapytanie . "<br>" . $conn->error;
	}
?>