<?php
	session_start();
	
	if((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit();
	}
	require_once "conn.php";
	$login=$_POST['login'];
	$haslo=$_POST['haslo'];
	
	$login = htmlentities($login,ENT_QUOTES, "UTF-8");
	$haslo = htmlentities($haslo,ENT_QUOTES, "UTF-8");
	if ($result = @$conn->query(sprintf("SELECT * FROM administratorzycms WHERE Login='%s' AND Haslo='%s'",
	mysqli_real_escape_string($conn,$login),
	mysqli_real_escape_string($conn,$haslo))))
	{
		$ilu_userow = $result->num_rows;
		if($ilu_userow>0)
		{
			$_SESSION['zalogowany']=true;
			$rekord = $result->fetch_assoc();
			$_SESSION['id'] = $rekord['ID'];
			$_SESSION['user'] = $rekord['Login'];
				
			unset($_SESSION['blad']);
				
			$result->free_result();
					
			header('Location: paneladmina.php');
		}
		else
		{
			$_SESSION['blad']= '<span style="color:red"> Nieprawidlowe dane logowania!</span>';
			header('Location: index.php');
		}
	}	
$conn->close();
?>