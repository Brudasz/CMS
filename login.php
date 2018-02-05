<?php
	session_start();
	
	if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: panel_administratora.php');
		exit();
	}
?>
<html>
<head>
	<title>Content Management System</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css" media="screen">
	<link rel="stylesheet" href="css/logowanie.css" media="screen">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<!-- LOGO -->
		<div class="row">
			<div class="col">
			
			<div id="logo_box" class="rounded-circle">
			<img id="logo" src="Images/logo.png" alt="logo" />
			</div>
			
			</div>
		</div>
		
		<!-- LOGOWANIE -->
		<div id="logowanie" class="row-fluid rounded">
		
			<form action="logowanie.php" method="POST"/>
				<input id="logowanie_inputy" type="text" placeholder="Login" autocomplete="off" name="login"><br>
				<input id="logowanie_inputy" type="password" placeholder="Password" autocomplete="off" name="haslo"><br>
				<input id="logowanie_button" class="rounded" type="submit" value="Log in" >
			</form>
			<?php
				if(isset($_SESSION['blad']))
				{
				echo $_SESSION['blad'];
				}
			?>
			
		</div>
		
		<div id="account" class="row">
		<p><a href="rejestracja.php">You don't have an account? Click here to make one!</a></p>
		</div>
		
	</div>

</body>
</html>