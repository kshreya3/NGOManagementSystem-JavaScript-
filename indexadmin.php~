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

<?php require'include/headeradmin.php' ?>

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
							<?php require'include/sidebaradmin.php' ?>
						</p>
					</div>					
				</div>
				<!--END OF SIDEBAR-->
				<!--MAIN-->
				<!--col-md-8-->
				<div id="grid">
					<div class="col-md-8">
						<div class="page-title clearfix" >
							<h2>EVENTS</h2><hr></br>
							<form name="" id="" action="<?php $_SELF_PHP ?>" method="POST" autocomplete="off">
							<fieldset>
	
							<legend style="margin-left:80px;">Create Event</legend><br>
							<center>
								Event Name &nbsp&nbsp&nbsp<input type="text" name="e_name" required><br>
								Event location <input type="text" name="e_location" required><br>
								Event Date  &nbsp&nbsp&nbsp&nbsp&nbsp<input type="date" name="e_date" required><br>
								Event Pincode <input type="text" name="e_pincode" required><br><br>
								<input type="submit" name="s1" value="Submit" ></input>
							</center>	<br>
							</fieldset>						
						</form>				
		
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

<?php
	//echo"hello";
	$con=pg_connect("host=192.168.16.1 port=5432 dbname=TYBG6 user=TYBG6") or die("could not connect");
	$no="default";
	$a=4;
	$e_name=$_POST['e_name'];
	$e_location=$_POST['e_location'];
	$e_date=$_POST['e_date'];
	$e_pincode=$_POST['e_pincode'];
	if(isset($_POST['s1']))
	{
		$entry=pg_query("insert into Event values(default,'$e_name','$e_location','$e_date','$e_pincode');");
	}				
	
?>
