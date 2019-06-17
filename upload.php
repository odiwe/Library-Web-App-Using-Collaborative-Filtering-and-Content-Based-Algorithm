<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 3/10/2017
 * Time: 3:48 PM
 */
session_start();
if(!isset($_SESSION['user'])){

     header("Location: http://localhost/jobboardwordpress.com/site/login.php");

}
include 'connection.php';
$username = $_SESSION['user'];
if(isset($_POST['upload_photo'])){

	$file_tmp = $_FILES["file_img"]["tmp_name"];
	$temp = explode(".", $_FILES["file_img"]["name"]);
	$filename = "jobseek".round(microtime(true)) . '.' . end($temp);
	$file_type = $_FILES["file_img"]["type"];
	$file_path = "img/".$filename;
    $search = "SELECT * FROM candidate_pic WHERE username='$username'";
       $search_conn= $conn->query($search);
            if($search_conn->num_rows>0){
                $simple = "UPDATE candidate_pic SET img_name='$filename',img_path='$file_path',img_type='$file_type' WHERE username='$username'";
                  $simple_conn = $conn->query($simple);
                if($simple_conn===true){
                    $success="<div class='alert alert-success'>Photo Successfully Uploaded</div>";
					move_uploaded_file($file_tmp,$file_path);
                }else{
					$error="<div class='alert alert-danger'>Photo Not Successfully Uploaded</div>";
				}
            }else{
			$sql = "INSERT INTO candidate_pic (username,img_name,img_path,img_type) VALUES ('$username','$filename','$file_path','$file_type')";
       			$result = $conn->query($sql);
           		 if($result===true){
                $success="<div class='alert alert-success'>Photo Successfully Uploaded</div>";
					 move_uploaded_file($file_tmp,$file_path);
            }else{
					 $error="<div class='alert alert-danger'>Photo Not Successfully Uploaded</div>";
				 }
	}
}

if(isset($_POST['upload_resume'])){

	$file_tmp = $_FILES["file"]["tmp_name"];
	$temp = explode(".", $_FILES["file"]["name"]);
	$filename = "jobseek_resume".round(microtime(true)) . '.' . end($temp);
	$file_type = $_FILES["file"]["type"];
	$file_path = "resume/".$filename;
    $search = "SELECT * FROM candidate_resume WHERE username='$username'";
       $search_conn= $conn->query($search);
            if($search_conn->num_rows>0){
                $simple = "UPDATE candidate_resume SET resume_name='$filename',resume_path='$file_path',resume_type='$file_type' WHERE username='$username'";
                  $simple_conn = $conn->query($simple);
                if($simple_conn===true){
                    $success="<div class='alert alert-success'>Resume Successfully Uploaded</div>";
					move_uploaded_file($file_tmp,$file_path);
                }else{
					$error="<div class='alert alert-danger'>Resume Not Successfully Uploaded</div>";
				}
            }else{
			$sql = "INSERT INTO candidate_resume (username,resume_name,resume_path,resume_type) VALUES ('$username','$filename','$file_path','$file_type')";
       			$result = $conn->query($sql);
           		 if($result===true){
                $success="<div class='alert alert-success'>Resume Successfully Uploaded</div>";
					 move_uploaded_file($file_tmp,$file_path);
            }else{
					 $error="<div class='alert alert-danger'>Resume Not Successfully Uploaded</div>";
				 }
	}
}
?>

?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Jobseek</title>
		<link rel="shortcut icon" href="images/favicon.png">

		<!-- Main Stylesheet -->
		<link href="css/style.css" rel="stylesheet">

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.js"></script>
		<![endif]-->

	</head>
	<body>

		<!-- ============ PAGE LOADER START ============ -->

		<div id="loader">
			<i class="fa fa-cog fa-4x fa-spin"></i>
		</div>

		<!-- ============ PAGE LOADER END ============ -->

		<!-- ============ NAVBAR START ============ -->

		<div class="fm-container">
			<!-- Menu -->
			<div class="menu">
				<div class="button-close text-right">
					<a class="fm-button"><i class="fa fa-close fa-2x"></i></a>
				</div>
				<ul class="nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="dashboard.php">Profile</a></li>
					<li><a href="jobs.php">Jobs</a></li>
                    <li><a href="update_info.php">Experience/Education</a></li>
                    <li><a href="update_profile.php">Profile Update</a></li>
					<li><a href="upload.php">Upload resume/photo</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<!-- end Menu -->
		</div>

		<!-- ============ NAVBAR END ============ -->

		<!-- ============ HEADER START ============ -->

		<header>
			<div id="header-background"></div>
			<div class="container">
				<div class="pull-left">
					<div id="logo"><a href="index.php"><img src="images/logo.png" alt="Jobseek" /></a></div>
				</div>
				<div id="menu-open" class="pull-right">
					<a class="fm-button"><i class="fa fa-bars fa-lg"></i></a>
				</div>
				<div id="search" class="pull-right">
					<a href="dashboard.php"><?php echo $_SESSION['user']?></a>
				</div>
			</div>
		</header>

		<!-- ============ HEADER END ============ -->

		<!-- ============ RESUME START ============ -->

		<section id="resume">
			<div class="container">
				<?php

					if(isset($success)){
						echo $success;
					}
					if(isset($error)){
						echo $error;
					}

				?>
				<form method="post" action="upload.php" enctype="multipart/form-data">

					<!-- Resume Details Start -->
					<div class="row">
						<div class="col-sm-6">
							<h2>Profile Photo</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group" id="resume-photo-group">
								<label for="resume-photo">Photo</label>
								<input type="file" id="resume-photo" name="file_img" accept="image/*">
							</div>
						</div>
					</div>
                    <div class="row text-center">
						<div class="col-sm-12">
							<p>&nbsp;</p>
                            <input type="submit" class="btn btn-primary btn-lg" name="upload_photo">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<hr class="dashed">
						</div>
					</div>
					<!-- Resume Details End -->

					<!-- Resume File Start -->
					<div class="row">
						<div class="col-sm-12">
							<p>&nbsp;</p>
							<h2>Resume File</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group" id="resume-file-group">
								<label for="resume-file">Upload Your Resume</label>
								<input type="file" id="resume-file" name="file">
								<p class="help-block">upload your resume for employers to view. Max. file size: 64 MB.</p>
							</div>
						</div>
					</div>
					<!-- Resume File Start -->

					<div class="row text-center">
						<div class="col-sm-12">
							<p>&nbsp;</p>
                            <input type="submit" class="btn btn-primary btn-lg" name="upload_resume">
						</div>
					</div>

				</form>

			</div>
		</section>

		<!-- ============ RESUME END ============ -->

		<!-- ============ FOOTER START ============ -->

		<footer>
			<div id="credits">
				<div class="container text-center">
					<div class="row">
						<div class="col-sm-12">
							&copy; 2017  - recruitment management site<br>
							Designed &amp; Developed by <a href="#" target="_blank">Aransiola Oluwasemipe</a>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- ============ FOOTER END ============ -->

		<!-- Modernizr Plugin -->
		<script src="js/modernizr.custom.79639.js"></script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.11.2.min.js"></script>

		<!-- Bootstrap Plugins -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Retina Plugin -->
		<script src="js/retina.min.js"></script>

		<!-- ScrollReveal Plugin -->
		<script src="js/scrollReveal.min.js"></script>

		<!-- Flex Menu Plugin -->
		<script src="js/jquery.flexmenu.js"></script>

		<!-- Slider Plugin -->
		<script src="js/jquery.ba-cond.min.js"></script>
		<script src="js/jquery.slitslider.js"></script>

		<!-- Carousel Plugin -->
		<script src="js/owl.carousel.min.js"></script>

		<!-- Parallax Plugin -->
		<script src="js/parallax.js"></script>

		<!-- Counterup Plugin -->
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>

		<!-- No UI Slider Plugin -->
		<script src="js/jquery.nouislider.all.min.js"></script>

		<!-- Bootstrap Wysiwyg Plugin -->
		<script src="js/bootstrap3-wysihtml5.all.min.js"></script>

		<!-- Flickr Plugin -->
		<script src="js/jflickrfeed.min.js"></script>

		<!-- Fancybox Plugin -->
		<script src="js/fancybox.pack.js"></script>

		<!-- Magic Form Processing -->
		<script src="js/magic.js"></script>

		<!-- jQuery Settings -->
		<script src="js/settings.js"></script>


	</body>
</html>
