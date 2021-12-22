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
							<h2>EVENTS</h2><hr></br>
<?php
	$con=pg_connect("host=192.168.16.1 port=5432 dbname=TYBG6 user=TYBG6") or die("could not connect");
	
	$name=$_SESSION['name'];
		$location=pg_query("select u_locality from User_details WHERE u_name='$name';");
		while($location1=pg_fetch_row($location))
		{
			$l=$location1[0];
		}
		$entry=pg_query("select * from Event WHERE e_location='$l';");
		if(pg_num_rows($entry)>0)
		{
			echo"<center><table border=2>";
			echo"<tr><th>Event No</th><th>Event Name</th><th>Event Location</th><th>Event Date</th><th>Event Pincode</th></tr>";
			while($row=pg_fetch_row($entry))
			{
				echo"<tr>";
				echo"<td>$row[0]</td>";
				echo"<td>$row[1]</td>";
				echo"<td>$row[2]</td>";
				echo"<td>$row[3]</td>";
				echo"<td>$row[4]</td>";
				echo"</tr>";
			}
			echo"</table></center>";	
		}
		else
		{
			echo"Event Details not Found";
		}
	
?>		<br>							
		Check for Events scheduled in other areas:<br><br>
		<form method="POST">
		<input type="text" name="area">
		<input type="submit" name="s1" value="Check">
		</form><br><br>

<?php
	$con=pg_connect("host=192.168.16.1 port=5432 dbname=TYBG6 user=TYBG6") or die("could not connect");
	if(isset($_POST['s1']))
	{
		$area=$_POST['area'];
		$entry=pg_query("select * from Event WHERE e_location='$area';");
		if(pg_num_rows($entry)<=0)
		{
			$fp=1;
		}
		if(pg_num_rows($entry)>0)
		{
			$fp=2;
			echo"<center><table border=2>";
			echo"<tr><th>Event No</th><th>Event Name</th><th>Event Location</th><th>Event Date</th><th>Event Pincode</th></tr>";
			while($row=pg_fetch_row($entry))
			{
				echo"<tr>";
				echo"<td>$row[0]</td>";
				echo"<td>$row[1]</td>";
				echo"<td>$row[2]</td>";
				echo"<td>$row[3]</td>";
				echo"<td>$row[4]</td>";
				echo"</tr>";
			}
			echo"</table></center>";	
		}
		if($fp==1)
		{
			echo"Events Details not Found";
		}
	}
?>	

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

