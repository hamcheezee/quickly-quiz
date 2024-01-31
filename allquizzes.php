<?php 
include "connection.php";
$subjectid = $_GET['subjectid'];
$sql = "SELECT * FROM subjects WHERE snum = '$subjectid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>All quizzes</title>

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
						<i class="material-symbols-outlined" onclick="displayProfile()">arrow_drop_down</i>

						<!-- nav dropdown content -->
						<div class="nav-dropdown-content hidden" id="nav-dropdown-content">
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

			<!-- back and forward button -->
			<div class="back-forward-btn">
				<div class="back-btn">
					<i class="material-symbols-outlined">arrow_back</i>
				</div>
				
				<div class="forward">
					<i class="material-symbols-outlined">arrow_forward</i>
				</div>
			</div>
			<div class="container-menu">
				<a href="home.php" class="active"><?php echo $row['sname']; ?></a>
				<a href="allquizzes.php" class="current">All Quizzes</a>
    			<a href="allquestions.php" class="start">All Questions</a>
    			<a href="players.php" class="start">Dashboard</a>
    			<a href="exit.php" class="start">Members</a>
			</div>

			<!-- =========================== ALL QUIZZES =========================== -->
			<section class="allquizzes" id="allquizzes">

				<div class="container">
					
					<!-- container title -->
					<div class="container-title">
						<h1>All Quizzes</h1>
					</div>
					
					<!-- create new quiz -->
					<div class="create-quiz-btn">
						<a href="add.php?subjectid=<?php echo $subjectid; ?>">Create new quiz</a>
						<!--<input type="submit" name="submit" value="Create new quiz">-->
					</div>
	
					<!-- all quizzes table -->
					<table class="quizzes-table">
						 <thead>
							  <tr>
								   <th>No.</th>
								   <th>Quiz</th>
								   <th>Type</th>
								   <th>Amount</th>
								   <th>Delete</th>
							  </tr>
						 </thead>
	
						 <tbody>
							  <tr class="untitled">
								   <td></td>
								   <td>Untitled quiz name</td>
								   <td>-</td>
								   <td>-</td>
								   <td></td>
							  </tr>
	
							  <tr class="hidden">
								   <td>1</td>
								   <td>Unit 1: Software Process</td>
								   <td>Choices</td>
								   <td>7</td>
								   <td><i class="material-symbols-outlined">delete</i></td>
							  </tr>
	
							  <tr class="hidden">
								   <td>2</td>
								   <td>Unit 2: Spiral Model</td>
								   <td>Choices</td>
								   <td>10</td>
								   <td><i class="material-symbols-outlined">delete</i></td>
							  </tr>
	
						 </tbody>
		 
					</table>
				</div>
			</section>			

		</main>

		<!-- =========================== JS =========================== -->
		<script src="js/script.js"></script>

	</body>
</html>