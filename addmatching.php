<!DOCTYPE html>
<html>
	<head>
		<title>Add a matching question</title>

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
				<a href="#" class="active">CS266</a>
				<a href="allquizzes.php" class="start">All Quizzes</a>
				<a href="allquestions.php" class="start">All Questions</a>
				<a href="#" class="start">Dashboard</a>
				<a href="players.php" class="start">Members</a>
			</div>

			<!-- =========================== ADD A QUESTION =========================== -->
			<section class="add-question" id="add-question">
				
				<div class="container">

					<!-- container title -->
					<div class="container-title">
						<h1>Add a question</h1>
					</div>

					<!-- add a question form -->
					<div class="form">

						<!-- quiz name -->
						<div class="quiz-name">
							<input type="text" name="quiz-name" placeholder="Enter a quiz name" required="">
						</div>

						<!-- choose question type -->
						<div class="choose-type">
							<label class="subtitle" style="color: var(--color-header)">Question type :</label>

							<input type="radio" id="choices" name="type" value="choices">
  							<label for="choices" class="type">Choices</label>

  							<input type="radio" id="short" name="type" value="short">
  							<label for="short" class="type">Short answers</label>

							<input type="radio" id="matching" name="type" value="matching">
  							<label for="matching" class="type">Matching</label>
						</div>

						<!-- choose amount of question -->
						<div class="choose-amount">
							<label class="subtitle" style="color: var(--color-header)">Number of questions :</label>
							<input type="text" name="amount" required="">
						</div>
						
						<form method="post" action="">
                            <!-- all answers -->
							<p>
								<div class="answer">
									<label class="subtitle">All Answers :</label><br>
                                    <textarea name="" id="" cols="30" rows="7"></textarea>
								</div>
							</p>

							<!-- question -->
							<p>
								<div class="question">
                                    <label class="subtitle">Question :</label>
									<input type="text" name="question" placeholder="Enter a question" required="">
								</div>
							</p>

							<!-- correct answer -->
							<p>
								<label class="subtitle">Correct answer :</label>

								<select name="answer">
									<option value="a">Sprint Goal</option>
									<option value="b">Product Backlog</option>
									<option value="c">Sprint Review</option>
									<option value="d">Scrum Master</option>
								</select>
							</p>
		
							<!-- submit button -->
							<p class="form-btn">
								<input type="submit" name="submit" value="Submit">
						</p>
						</form>

					</div>

				</div>

			</section>

		</main>

	</body>
</html>