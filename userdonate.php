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
						<h2>Bank Details</h2><hr></br>
							<p>
								Account Name: HANDS TO CLEAN			
							<br>	Account Number:608810110002607						
							<br>	IFSC Code:BKID0006088
							<br>  	Account Type:Savings Account
							<br> 	Address:Bank of India,E-5 Prashant vihar,Delhi-85						
  							</p><br><br>
							<h3 style="font-color:blue;"><center>Kerela needs your help!!!!</h3>
							<h5><center>Contribute to Flood Relief</h5><br>
							<p>Account Details<p>
							A/c Number:67319948232<br>
							A/c Name:Chief Minister Distress Relief Fund<br>
							Branch:City,Thirivananthapuram<br>
							IFSC Code:SBININBBT08<br>
							Account Type:Savings<br>
  
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
