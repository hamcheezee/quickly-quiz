<?php session_start(); ?>
<?php include "connection.php";
if (isset($_SESSION['admin'])) {
	$subject = mysqli_query($conn, "SELECT * FROM subjects");
?>





<!DOCTYPE html>
<html>
	<head>
		<title>Homepage</title>

		<!-- =========================== CSS =========================== -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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

				<!-- nav icon -->
				<div class="nav-icon">
					<div class="nav-admin">
						<h3>Sararat S.</h3>
					</div>

					<div class="nav-dropdown-icon">
						<i class="material-symbols-outlined">arrow_drop_down</i>

						<!-- nav dropdown content -->
						<div class="nav-dropdown-content" id="nav-dropdown-content">
							<a href="#">Sararat Srihiranpallop</a>
							<a href="#">sararat@tu.ac.th</a>
							<hr>

							<div class="nav-drodown-item">
								<i class="material-symbols-outlined">account_circle</i>
								<a href="#">Profile</a>
							</div>

							<div class="nav-drodown-item">
								<i class="material-symbols-outlined">settings</i>
								<a href="#">Settings</a>
							</div>

							<div class="nav-drodown-item">
								<i class="material-symbols-outlined">logout</i>
								<a href="#">Logout</a>
							</div>
						</div>
					</div>

					<div class="nav-account-icon">
						<i class="material-symbols-outlined">account_circle</i>
					</div>
				</div>
			</nav>
		</header>

		<!-- =========================== MAIN =========================== -->
		<main>

			<div class="container-menu">
				<a href="home.php" class="start">Home</a>
			</div>

			<!-- =========================== HOME =========================== -->
			<section class="home" id="home">

				<div class="container">
					
					<!-- container title -->
					<div class="container-title">
						<h1>Home</h1>
					</div>
					<hr>

					<!-- container subtitle -->
					<div class="home-sub-title">
						<h3>Subject</h3>
					</div>

					<!-- =========================== SUBJECT =========================== -->
					<!-- created subject -->
					<?php while($row = mysqli_fetch_array($subject)) { ?>
						<div class="subject-container">
							<!-- more menu -->
							<div class="more-menu">
								<a href="editsubject.php?id=<?php echo $row['snum']; ?>"><i class="material-symbols-outlined">more_horiz</i></a>
							</div>

							<!-- subject icon -->
							<div class="subject-icon">
								<?php
									$subjectname = $row['sname'];
									$subjectid = $row['snum'];

									echo "<a href='allquizzes.php?subjectid=$subjectid'><i class='material-symbols-outlined'>menu_book</i></a>";
								?>
								<!--<a href="allquizzes.php"><i class="material-symbols-outlined">menu_book</i></a>-->
							</div>

							<!-- subject title -->
							<div class="subject-title">
								<h5><?php echo $row['sname']; ?></h5>
							</div>
						</div>
					<?php } ?>
					
					<!-- create new subject -->
					<div class="new-subject-container">
						<!-- subject icon -->
						<div class="subject-icon">
							<a href="addsubject.php"><i class="material-symbols-outlined">add_circle</i></a>
						</div>
						
						<!-- subject title -->
						<div class="subject-title">
							<h5>Create new subject</h5>
						</div>
					</div>

				</div>
				
			</section>			

		</main>

	</body>
</html>





<?php } 
else {
header("location: index.php");
}
?>