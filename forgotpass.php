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
<div class="in">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!--MAIN-->
				<div id="grid">
					<div class="page-title clearfix">
						<form action="<?php $_SELF_PHP ?>" method="POST" autocomplete="off">
						<fieldset>
						
						<legend style="margin-left:450px;">Password Reset</legend><br>
						<center>
						&nbspEnter Contact Number:&nbsp&nbsp<input type="text" name="regi_num"></input><br><br>
						<div name="error" style="color:red;"><?php echo $error;?></div>						
						<input type="submit" value="Submit" name="Submituser"></input></center>	<br>
						</fieldset>						
						</form>					
					</div>
				</div>
				<!--END OF MAIN-->
			</div>		
		</div>
	</div>
</div>

<?php
	session_start();
	//$_SESSION['loggedin']=false;
	$error="";
	$f=0;
	$con=pg_connect("host=192.168.16.1 port=5432 dbname=TYBG6 user=TYBG6") or die("could not connect");
	//$name=$_POST['name'];
	//$password=$_POST['password'];
	
	$regi_no=$_POST['regi_num'];
	$_SESSION['r1']=$regi_no;

	if(isset($_POST['Submituser']))
	{
	//	$entry=pg_query("select a_name,a_password from Admin WHERE a_name='$name' AND a_password='$password';");
	//	if(pg_num_rows($entry)>0)
	//	{
	//		$_SESSION['loggedin']=true;
	///		$_SESSION['name']=$name;
	//		header("location:indexadmin.php");	
	//	}
	//	else
	//	{
		//	$f=1;
		//}
		$checkN=pg_query($con,"select U_contact from User_details WHERE U_contact='$regi_no';");
		//$entry1=pg_query("select u_name,u_password from User_details WHERE u_name='$name' AND u_password='$password';");
		if(pg_num_rows($checkN)>0)
		{
		
			echo "above";	
			//$_SESSION['loggedin']=true;
			//$_SESSION['name']=$name;
			header("location:otp.php");	
		}
		else
		{
			//$f=1;
		
	   //if($f!=0)
		
			echo "invalid";
			$error= "Invalid Entry";
		}
	}
?>


<?php require'include/footer.php' ?>


