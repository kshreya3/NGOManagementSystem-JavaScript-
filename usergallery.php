<!DOCTYPE html>
<html>
	<head>
		<link href="css/header.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link href="css/footer.css" rel="stylesheet">
		<link href="css/sidebar.css" rel="stylesheet">
		<link href="css/gallery.css" rel="stylesheet">
		<style>
			.page-title
			{
				padding-left:30px;
			}
		</style>
	</head>

<!--BODY-->

<?php require'include/headeruser.php' ?>

<?php
	session_start();
	if($_SESSION['loggedin']==true)
	{
	}
	else
	{
		header("location:nologin.php");
	}
?>

<div class="in">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!--MAIN-->
				<!--col-md-8-->
				<div id="grid">
					<div class="page-title clearfix" >
						<h3>GALLERY</h3><hr>
						<div>
							<img src="Gallery/1.jpg">
							<img src="Gallery/2.jpg">
							<img src="Gallery/3.jpg">
							<img src="Gallery/4.jpg">
							<img src="Gallery/5.jpg">
							<img src="Gallery/6.jpg">
							<img src="Gallery/7.jpg">
							<img src="Gallery/8.jpg">
							<img src="Gallery/9.jpg">
							<img src="Gallery/10.jpg">
							<img src="Gallery/11.jpg">
							<img src="Gallery/12.jpg">
							<img src="Gallery/13.jpg">
							<img src="Gallery/14.jpg">
							<img src="Gallery/15.jpg">
						</div>
					</div>
				</div>
				<!--END OF col-md-8-->
				<!--END OF MAIN-->
			</div>		
		</div>
	</div>
</div>

<?php require'include/footer.php' ?>
