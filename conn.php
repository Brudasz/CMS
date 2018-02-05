<?php
	$servername = 'localhost';
	$dbname = 'cms';
	$username = 'root';
	$password = '';
	
	$conn = @new mysqli($servername, $username, $password, $dbname);
	
	if($conn->connect_errno!=0)
	{
		echo "Error".$conn->connect_errno;
	}
?>