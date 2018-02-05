<?php
	session_start();
?>
<html>
<head>
	<title>Content Management System</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css" media="screen">
	<link rel="stylesheet" href="css/panel_administratora.css" media="screen">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
	
	<!-- MENU GÓRNE -->
	<div id="top_menu" class="row">
	
		<!-- NASZE LOGO -->
		<img id="logo" src="Images/logo.png" alt="logo" />
		
		<!-- ZNACZNIK DOMU -->
		<i id="logo_home" class="fas fa-home"></i>
		<p id="logo_home_text">Home</p>
		
		<!-- DODAWANIA NOWEJ STRON -->
		<i id="logo_home" class="fas fa-plus"></i>
		<p id="logo_home_text">New</p>
		
		<!-- użytkownik -->
		<i id="avatar_user" class="fas fa-user"></i>
		<p id="avatar_user_text"><?php echo $_SESSION['login']; ?></p>
	
	</div>

	<div class="row">

		<!-- BOCZNE MENU -->
		<div id="side_menu" class="col-2">
		
		<!-- MEDIA -->
			<div class="dropdown">
				<button id="dropdown" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				
				<i class="fas fa-film"></i>
				Media
				
				</button>
				
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</div>
			
			<!-- PAGES -->
			<div class="dropdown">
				<button id="dropdown" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				
				<i class="fas fa-file"></i>
				Pages
				
				</button>
				
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</div>
			
			<!-- COMMENTS -->
			<div class="dropdown">
				<button id="dropdown" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				
				<i class="fas fa-comment"></i>
				Notepad
				
				</button>
				
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</div>
			
			<!-- APPEARANCE -->
			<div class="dropdown">
				<button id="dropdown" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				
				<i class="fas fa-paint-brush"></i>
				Appearance
				
				</button>
				
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</div>
			
			<!-- PLUGINS -->
			<div class="dropdown">
				<button id="dropdown" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				
				<i class="fas fa-plug"></i>
				Plugins
				
				</button>
				
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</div>
			
			<!-- TOOLS -->
			<div class="dropdown">
				<button id="dropdown" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				
				<i class="fas fa-wrench"></i>
				Tools
				
				</button>
				
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</div>
			
			<!-- SETTINGS -->
			<div class="dropdown">
				<button id="dropdown" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				
				<i class="fas fa-cogs"></i>
				Settings
				
				</button>
				
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</div>
			
			
			
		</div>
		
		<!-- ZAWARTOŚĆ EDYTOWANEJ STRONY -->
		<div id="content" class="col">
		<?php
		session_destroy();
		?>
		</div>
		
	</div>
	
	<!-- STOPKA -->
	<div id="footer" class="row">
		<p id="footer_text">&copy; Copyright CMS by Jędrzej Boguszyński and Daniel Klemczak 2017</p>
	</div>
	
</div>

</body>
</html>