<?php
	session_start();
	
	if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: paneladmina.php');
		exit();
	}
?>
<!DOCTYPEHTML>
<html>
<head>
	<meta charset="UTF-8"/>
</head>
<body>
	<form action="logowanie.php" method="POST"/>
		Login:<input type="text" name="login" /><br />
		Haslo:<input type="password" name="haslo" /><br />
		<input type="submit" value="Zaloguj się"/>
	</form>
	<?php
		if(isset($_SESSION['blad']))
		{
			echo $_SESSION['blad'];
		}
	?>
</body>
</html>