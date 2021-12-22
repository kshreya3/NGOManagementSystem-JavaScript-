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
						&nbsp;Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<input type="text" name="internname" id="internname1" onkeyup="validate('internname',this.value)" ></input><br><div id='internname' class="cre"></div>
					<br>
						
						&nbsp;Contact:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="iphone" id="iphone1" onkeyup="validate('iphone',this.value)"></input><br>
					<div id='iphone' class="cre" style="margin-left:140px"></div><br>
						&nbsp;Email-id:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="iemail" id="iemail1" onkeyup="validate('iemail',this.value)"></input><br>
					<div id='iemail' class="cre" style="margin-left:175px"></div><br>
						&nbsp;Duration(in months):<input type="text" name="iduration" id="iduration1" onkeyup=validate('iduration',this.value)></input><br>
<div id='iduration' class="cre" style="margin-left:140px"></div><br>
						&nbsp;Designation:
						Photographer <input type="radio" value="photographer" name="idesig1" checked></input><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspWeb-Developer <input type="radio" name="idesig1" value="web-developer" ></input><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspContent Writer <input type="radio" name="idesig1" value="content" ></input><br>
						
<div id='idesig' class="cre" style="margin-left:140px"></div><br>						
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
<script src="javavalid1.js"></script>
<?php require'include/footer.php' ?>

<?php
	//echo"hello";
	$con=pg_connect("host=192.168.16.1 port=5432 dbname=TYBG6 user=TYBG6") or die("could not connect");
	$no="default";
	$a=4;
	$name=$_POST['internname'];
	$contact=$_POST['iphone'];
	$email=$_POST['iemail'];
	$duration=$_POST['iduration'];
	$designation=$_POST['idesig1'];
	
		$entry=pg_query("insert into Interns values(default,'$name','$contact','$designation','$duration');");
					
	
?>
