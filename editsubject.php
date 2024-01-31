<?php session_start(); ?>
<?php include "connection.php";
if (isset($_SESSION['admin'])) {
?>


<?php 
if (isset($_GET['snum'])) {
	$snum = mysqli_real_escape_string($conn , $_GET['snum']);
	if (is_numeric($snum)) {
		$query = "SELECT * FROM subjects WHERE snum = '$snum' ";
		$run = mysqli_query($conn, $query) or die(mysqli_error($conn));
		if (mysqli_num_rows($run) > 0) {
			while ($row = mysqli_fetch_array($run)) {
				$sname = $row['sname'];
			}
		}
		else {
			echo "<script> alert('error'); </script>" ;
		}
	}
	else {
		header("location: home.php");
	}
}


?>

<?php 
if (isset($_POST['submit'])) {
	$sname =htmlentities(mysqli_real_escape_string($conn , $_POST['subject-edit']));
    
	$query = "UPDATE subjects SET sname = '$sname' ";
	$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
	header('location: home.php');
} 

if(isset($_POST['delete'])) {
	$subject = mysqli_query($conn, "SELECT * FROM subjects");
	while($row = mysqli_fetch_array($subject)) {
		$snum = $row['snum'];
	}

	$delete = mysqli_query($conn, "DELETE FROM subjects WHERE snum = '$snum'");
	if($delete) {
		header('location: home.php');
	}
}

?>





<!DOCTYPE html>
<html>
	<head>
        <title>Edit subject</title>

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

            <!-- =========================== ADD SUBJECT =========================== -->
            <section class="addsubject" id="addsubject">

                <div class="container">
					<div class="close-btn">
						<a href="home.php"><i class="material-symbols-outlined">close</i></a>
					</div>

                    <!-- create new subject content -->
					<form method="post" action="">	
                        <!-- form title -->
                        <div class="form-title">
                            <h2>Edit subject name</h2>
                        </div>
						
                        <!-- form input filed -->
					    <div class="input-field">
						    <input type="text" name="subject-edit" placeholder="Enter an edited subject name">
						</div>
						  
                        <!-- form buttons -->
						<div class="form-btns">
							<a href="#"><input type="submit" name="submit" value="Save" style="background-color: #4CBB17"></a>
							<a href="#"><input type="submit" name="delete" value="Delete" style="background: hsl(0, 100%, 50%)"></a>
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