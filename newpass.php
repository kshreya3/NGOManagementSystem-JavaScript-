<!DOCTYPE html>
<html>
	<head>
		<link href="css/header.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link href="css/footer.css" rel="stylesheet">
		<link href="css/sidebar.css" rel="stylesheet">
	</head>

<!--BODY-->

<?php require'include/header.php' ?>

<?php
	session_start();
	$n=$_SESSION['r1'];
	$con=pg_connect("host=192.168.16.1 port=5432 dbname=TYBG6 user=TYBG6") or die("could not connect");
	$npass=$_POST['Npassword'];
	//echo"hello";	
	if(isset($_POST['SubmitNpass']))
	{
				pg_query($con,"UPDATE User_details SET U_password='$npass' WHERE U_contact='$n';");
		header("location:login.php");
			
	}
	//session_destroy();
	
?>

<div class="in">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!--MAIN-->
				<div id="grid">
					<div class="page-title clearfix">
						<form action="<?php $_SELF_PHP ?>" method="POST" autocomplete="off">
						<fieldset>
						
						<!--<legend style="margin-left:450px;">Login</legend><br>-->
						<center>
						
						&nbspEnter New Password:&nbsp&nbsp<input type="password" name="Npassword"></input><br><br>
						<!--&nbspPassword:&nbsp&nbsp&nbsp&nbsp<input type="password" name="password"></input><br><br>-->
						<div name="error" style="color:red;"><?php echo $error;?></div>						
						
						<input type="submit" value="Submit" name="SubmitNpass"></input></center>	<br>
						</fieldset>						
						</form>					
					</div>
				</div>
				<!--END OF MAIN-->
			</div>		
		</div>
	</div>
</div>

<?php require'include/footer.php' ?>


