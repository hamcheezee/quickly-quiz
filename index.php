<?php
session_start();
include "connection.php";
if (isset($_POST['password']))  {
	$password = mysqli_real_escape_string($conn , $_POST['password']);
	$adminpass = '$2y$10$8WkSLFcoaqhJUJoqjg3K8eWixJWswsICf7FTxehKmx8hpmIKYWqju';
	if (password_verify($password , $adminpass)) {
		$_SESSION['admin'] = "active";
		header("location: home.php");
	}
	else {
		echo  "<script> alert('wrong password');</script>";
	}
}


?>





<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>

		<!-- =========================== CSS =========================== -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

		<!-- =========================== HEADER =========================== -->
		<header class="header" id="header">
			<!-- nav -->
			<nav class="nav">
				<!-- nav logo -->
				<div class="nav-logo">
					<img src="css/img/Quickly Quiz LOGO.png">
				</div>
			</nav>
		</header>

		<!-- =========================== MAIN =========================== -->
		<main>

			<!-- =========================== LOGIN =========================== -->
			<section class="login" id="login">
				<div class="container padd-15">
					<!-- login title-->
					<div class="login-title">
						<h2>Enter Password</h2>
					</div>
	
					<!-- login form -->
					<div class="login-container">
						<form method="POST">
							<input type="password" name="password" required="">
							<input type="submit" name="submit" value="Login">
						</form>
					</div>
					
				</div>
			</section>

		</main>

	</body>
</html>