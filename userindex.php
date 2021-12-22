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
							<h2>REPORT FOR A CAUSE</h2><hr></br>
							<form name="" id="" action="<?php $_SELF_PHP ?>" method="POST" autocomplete="off">
							<fieldset>
	
							<legend style="margin-left:80px;">Create a Report</legend><br>
							<center>
								Report Description <input type="textarea" name="r_description" style="height:60px;" required><br><br>
								Report location &nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="r_location" required><br><br>
								
								<input type="submit" name="s2" value="Submit" ></input>
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
	$r_description=$_POST['r_description'];
	$r_location=$_POST['r_location'];
	if(isset($_POST['s2']))
	{
		$entry=pg_query("insert into Report values(default,'$r_description','$r_location');");
	}				
	
?>
