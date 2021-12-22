<!DOCTYPE html>
<html>
	<head>
		<link href="css/header.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link href="css/footer.css" rel="stylesheet">
		<link href="css/sidebar.css" rel="stylesheet">
		<style>
		.cre
		{
			color:red;
			margin-left:110px;
		}
		</style>
	</head>

<!--BODY-->

<?php require'include/header.php' ?>

<?php
	session_start();
	$_SESSION['loggedin']=false;
?>

<div class="in">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!--MAIN-->
				<div id="grid">
					<div class="page-title clearfix">
						<form name="validation" id="validation" action="<?php $_SELF_PHP ?>" method="POST" autocomplete="off">
						<fieldset>
						
						<legend style="margin-left:450px;">Sign-Up</legend><br>
						<center>
						&nbsp;Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<input type="text" name="username" id="username1" onkeyup="validate('username',this.value)" ></input><br><div id='username' class="cre"></div>
					<br>
						
						&nbsp;Contact:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="phone" id="phone1" onkeyup="validate('phone',this.value)"></input><br>
					<div id='phone' class="cre" style="margin-left:140px"></div><br>
						&nbsp;Email-id:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email" id="email1" onkeyup="validate('email',this.value)"></input><br>
					<div id='email' class="cre" style="margin-left:175px"></div><br>
						&nbsp;Age:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="age" id="age1" onkeyup=validate('age',this.value)></input><br>
<div id='age' class="cre" style="margin-left:140px"></div><br>
						&nbsp;Locality:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="locality" id="locality1" onkeyup=validate('locality',this.value)></input><br>
<div id='locality' class="cre" style="margin-left:140px"></div><br>
						&nbsp;Occupation:&nbsp&nbsp<input type="text" name="occupation" id="occupation1" onkeyup=validate('occupation',this.value)></input><br>
<div id='occupation' class="cre" style="margin-left:140px"></div><br>
						&nbsp;Password:&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name="password" id="password1" onkeyup=validate('password',this.value)></input><br>
<div id='password' class="cre" style="margin-left:140px"></div><br>
						<input type="button" id="" value="Submit" onclick="checkForm()"></input>
							</center>	<br>
						</fieldset>						
						</form>					
					</div>
				</div>
				<!--END OF MAIN-->
			</div>		
		</div>
	</div>
</div>
<script src="javavalid.js"></script>
<?php require'include/footer.php' ?>

<?php
	//echo"hello";
	$con=pg_connect("host=192.168.16.1 port=5432 dbname=TYBG6 user=TYBG6") or die("could not connect");
	$no="default";
	$a=4;
	$username=$_POST['username'];
	$usercontact=$_POST['phone'];
	$useremail=$_POST['email'];
	$userage=$_POST['age'];
	$userlocality=$_POST['locality'];
	$useroccupation=$_POST['occupation'];
	$userpassword=$_POST['password'];
	
		$entry=pg_query("insert into User_details values(default,'$username','$userpassword','$userage','$userlocality','$usercontact','$useroccupation');");
					
	
?>
