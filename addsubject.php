<?php session_start(); ?>
<?php include "connection.php";
if (isset($_SESSION['admin'])) {

if(isset($_POST['submit'])) {
    $name =htmlentities(mysqli_real_escape_string($conn , $_POST['subject-name']));
    $description =htmlentities(mysqli_real_escape_string($conn , $_POST['subject-description']));

    $query = "INSERT INTO subjects(sname, sdescription) VALUES ('$name', '$description') " ;
	$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn) > 0){
		echo "<script>alert('Subject successfully added'); </script> ";
		echo "<script>window.location.href='home.php';</script>";
	}else{
		"<script>alert('error, try again!'); </script> ";
	}
}
?>






<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add subject</title>

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
				<a href="index.php" class="start">Home</a>
			</div>

            <!-- =========================== ADD SUBJECT =========================== -->
            <section class="addsubject" id="addsubject">

                <div class="container">

                    <!-- create new subject content -->
					<form method="post" action="">	
                        <!-- form title -->
                        <div class="form-title">
                            <h2>Create new subject</h2>
                        </div>
                        
                        <!-- form subtitle -->
						<div class="form-subtitle">
							<h3>Subject name</h3>
						</div>
						
                        <!-- form input filed -->
					    <div class="input-field">
						    <input type="text" name="subject-name" required>
						</div>
						
                        <!-- form subtitle -->
						<div class="form-subtitle">
							<h3>Description</h3>
						</div>
		
                        <!-- form input filed -->
						<div class="input-field">
							<input type="text" name="subject-description">
						</div>
						  
                        <!-- form buttons -->
						<div class="form-btns">
							<a href="#"><input type="submit" name="submit" value="Create"></a>
							<a href="home.php"><input type="button" name="close" value="Close"></a>
						</div>
					</form>

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