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
			.tb{
				width:100%;			
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
							<h2>TRAINING</h2><hr></br>
<div class="tb">
<?php
	$con=pg_connect("host=192.168.16.1 port=5432 dbname=TYBG6 user=TYBG6") or die("could not connect");
	echo"<center><table border=2>";
	echo"<tr><th>User Name</th><th>User Age</th><th>User Locality</th><th>User Contact</th><th>User Occupation</th><th>Start Date</th><th>Status</th></tr>";
		$name=pg_query("select IL_name from InternList;");
		while($row=pg_fetch_row($name))
		{
			$name1=$row[0];
		
			$entry=pg_query("select *,start_date,status from User_details,Training WHERE u_name='$name1' AND u_id=t_no;");
			if(pg_num_rows($entry)>0)
			{
			
				while($row=pg_fetch_row($entry))
				{
					echo"<tr>";
					
					echo"<td>$row[1]</td>";
					
					echo"<td>$row[3]</td>";
					echo"<td>$row[4]</td>";
					echo"<td>$row[5]</td>";
					echo"<td>$row[6]</td>";
					echo"<td>$row[8]</td>";
					echo"<td>$row[10]</td>";
					echo"</tr>";
				}
			}
			else if(pg_num_rows($entry)<0)
			{
				echo"No Training Details not Found";
			}
		}
	echo"</table></center>";
?>
</div>						</div>
					</div>
				</div>
				<!--END OF col-md-8-->
				<!--END OF MAIN-->
			</div>		
		</div>
	</div>
</div>

<?php require'include/footer.php' ?>
