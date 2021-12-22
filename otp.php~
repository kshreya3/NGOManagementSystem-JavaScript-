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
	$error="";
	$f=0;
	$con=pg_connect("host=192.168.16.1 port=5432 dbname=TYBG6 user=TYBG6") or die("could not connect");
	$otp=$_POST['otp'];
	//echo"no:".$_SESSION['r1'];
	//echo "$r1";
	if(isset($_POST['Submitotp']))
	{
		if($otp==1111)
		{
			header("location:newpass.php");	
		}	
		else
		{
			$f=1;
		}
		if($f!=0)
		{
			$error= "Invalid Entry";
		}
			
	}
	
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
						An OTP has been sent to your Registered Contact number</br>
						&nbspEnter OTP:&nbsp&nbsp<input type="password" name="otp"></input><br><br>
						<!--&nbspPassword:&nbsp&nbsp&nbsp&nbsp<input type="password" name="password"></input><br><br>-->
						<div name="error" style="color:red;"><?php echo $error;?></div>						
						
						<input type="submit" value="Submit" name="Submitotp"></input></center>	<br>
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


