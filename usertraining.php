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

<?php
	$reply="";
	//echo"hello";
	$con=pg_connect("host=192.168.16.1 port=5432 dbname=TYBG6 user=TYBG6") or die("could not connect");
	$name=$_SESSION['name'];
	if(isset($_POST['internlist']))
	{
		$reply="You have successfully applied for Training. You will be contacted soon.";
		$entry1=pg_query("select il_name from InternList WHERE il_name='$name';");
		while($row=pg_fetch_row($entry1))
		{
			$name1=$row[0];
			//echo $name1;
			//echo $name;
		}
		if($name==$name1)
		{
			//echo "hello";
		}
		else
		{
			$entry=pg_query("insert into InternList values(default,'$name');");
			//echo "hello";
		}
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
							<h2>Training</h2><hr></br>
							<form action="<?php $_PHP_SELF ?>" method="POST">
							<input type="submit" style="font-size:20px; color:black; background-color:#9AD3DE;"value="Click here for joining the training" id="internlist1" name="internlist"></input>	
							</form><br>
							<div name="error">
							<?php echo $reply; ?></div>
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

