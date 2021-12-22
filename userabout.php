<!DOCTYPE html>
<html>
	<head>
		<link href="css/header.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link href="css/footer.css" rel="stylesheet">
		<link href="css/sidebar.css" rel="stylesheet">
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
				<!--HERE BEGIN SIDEBAR-->
				<div class="col-md-4">
					<div class="widget-main">					
						<p>
							<?php require'include/sidebaruser.php' ?>
						</p>
					</div>					
				</div>
				<!--END OF SIDEBAR-->
				<!--MAIN-->
				<!--col-md-8-->
				<div id="grid">
					<div class="col-md-8">
						<div class="page-title clearfix" >
							<h2>ABOUT</h2><hr></br>
							  <h3>ABOUT THIS PROJECT</h3>
	
	<p>"Hands to Clean" is a volunteer group conducting cleanliness drives and awareness programs in Pune."Hands to Clean" volunteers are a team of highly motivated people from different walks of life -ranging from students to working professionals -who want to realize the dream of clean Pune and a clean India. 
	"Hands to Clean" looks out for our environmental helath by drawing out public response towards cleanliness of our surrounding areas.</p></br>
  <p><h3>WHY</h3>
	Enthusiastic volunteers take up cleanliness drive at various locations to motivate people in maintaining a spotless environment.The squad is a volunteer led initiative to supplement the Swachh Bharat Mission towards the Sustainable Development Goal on improving universal access to safe,inclusive and accessible ,green and public spaces.
</p></br>
  <p><h3>HOW</h3>
	A group of "Hands to Clean" volunteers -the Clean Squad - meet during the weekends and organise cleanliness drives at public spaces,including the public to volunteer for the same and contribute to a clean and sustainable environment.
</p></br>
  <p><h3>WHERE</h3>
	The programme is currently ongoing in Pune and its sub-areas.</p>
  
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
