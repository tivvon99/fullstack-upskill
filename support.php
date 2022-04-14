<!Doctype html>
<html>
<head>
	<title>Support</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="mystyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<!-- Make a container for the entire page -->
	
		<!-- Page Header -->
		<header class="header-container">
			
			<!-- Logo Container -->
			<span class="logo-container">  <!--use formula to properly space -->
				<p>logo</p>
				<!-- Insert logo for page -->
			</span>
			<!-- Title Container -->
			<span class="title-container">
				<h1>That Hits The Spot</h1>
			</span>
			<!-- Nav Bar -->
			<button class="navbar-container">Drop Down Menu
				<!-- Nav Bar Object -->
					<nav class="navbar" role="navigation">
						<div class = "navbar-column">
							<a href="index.htm" class="navbar-brand" href="#">Home</a>
						</div>
						<div class = "navbar-column">
							<a href="morePosts.htm" class="navbar-brand" href="#">More Posts</a>
						</div>
						<div class = "navbar-column">
							<a class="navbar-brand" href="support.htm">Support</a>
						</div>
						<div class = "navbar-column">
							<a class="navbar-brand" href="aboutMe.htm">About Me</a>
						</div>
				</button>
		</header>
	
	<!-- End of page header -->

	<?php
		session_start();

			if(isset($_POST[‘enter’])){
				if($_POST[‘name’] != “”){
					$_SESSION[‘name’] = stripslashes(htmlspecialchars($_POST[‘name’]));
				}
			else{
			echo ‘<span class=”error”>Please type in a name</span>’;
			}
		}
	
		function loginForm(){
			echo’
				<div id=”loginform”>
					<p>Please enter your name to continue!</p>
					<form action=”index.php” method=”post”>
						<label for=”name”>Name &mdash;</label>
							<input type=”text” name=”name” id=”name” />
							<input type=”submit” name=”enter” id=”enter” value=”Enter” />
					</form>
				</div>
			‘;
		}
	?>

	<?php
if(!isset($_SESSION[‘name’])){
loginForm();
}
else{
?>

<?php
	if(!isset($_SESSION['name'])){
		loginForm();
	}

	else {
		?>
		<div id="wrapper">
			<div id="menu">
				<p class="logout"><a id="exit" href="#">Exit Chat</a></p>
			</div>
			<div id="chatbox">
				<?php
					if(file_exists("log.html")&&filesize("log.html") > 0) {
						$contents = file_get_contents("log.html");

						echo $contents;
					}
				?>
			</div>
			<form name="message" action="">
			<input name="usermsg"type="text" id="usermsg" />
			<input name="submitmsg" type="submit" id="submitmsg" value="Send"/>
			</form>
		</div>
	}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="script.js"></script>
<?php
}
?>
</body>
<html>