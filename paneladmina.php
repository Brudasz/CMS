<?php
	session_start();
	if(!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
?>
<!DOCTYPEHTML>
<html>
<head>
	<meta charset="UTF-8"/>
</head>
<body>
<?php	
	echo "<p>Witaj ".$_SESSION['user'].'! [<a href="wylogowanie.php">Wyloguj się</a>]</p>';
?>
</body>
</html>