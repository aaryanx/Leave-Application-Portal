<?php 
session_start();
if (!isset($_SESSION['email2']))
	header('location: index.php');
	
	require_once("connection.php");
     $current = $_SESSION['email'];
	$id="SELECT A_ID FROM applications";
	$name="SELECT Name FROM applications";
	$rno="SELECT Roll_No FROM applications";
	$reason="SELECT Reason FROM applications";
	$sdate="SELECT S_Date FROM applications";
	$status="SELECT Status FROM applications";
	
	$result0 = mysqli_query($con, $id);
	$result1 = mysqli_query($con, $name);
	$result2 = mysqli_query($con, $rno);
	$result4 = mysqli_query($con, $reason);
	$result5 = mysqli_query($con, $sdate);
	$result6 = mysqli_query($con, $status);
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>LeaveApp | Home</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		
		<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                      
					  </button>
					  <img src="images/iitglogo.png" width=50 height=50 align="centre">
					  <a class="navbar-brand" href="home2.php">Home</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="logout_script.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
						</ul>
					</div>
				</div>
			</div>



			<p></p>
		<div class="container-fluid">
			<?php //include("navbar-after-login.php"); ?>
			<br>
			<br>
			<br>
	<p></p>
		
	E-Mail ID: <?php echo $current;?>
		<table style="width:100%">
			<caption>Applications</caption>
		<tr>
			<th>ID</th>
			<th>Roll No</th>
			<th>Name</th>
			<th>Reason</th>
			<th>Start Date</th>
			<th>Current Status</th>
			<th>Change Status</th>
		</tr>
	<?php
		if(mysqli_num_rows($result0)>0)
     {
		while($row0 = mysqli_fetch_array($result0))
		{
			$outid =  $row0['A_ID'];
			$row2 = mysqli_fetch_array($result2);
			$outrno =  $row2['Roll_No'];
			$row1 = mysqli_fetch_array($result1);
			$outname =  $row1['Name'];
			$row4 = mysqli_fetch_array($result4);
			$outreason =  $row4['Reason'];
			$row5 = mysqli_fetch_array($result5);
			$outsdate =  $row5['S_Date'];
			$row6 = mysqli_fetch_array($result6);
			$outstatus =  $row6['Status'];
			
			echo "<tr><td>".$outid."</td>
			<td>".$outrno."</td>
			<td>".$outname."</td>
			<td>".$outreason."</td>
			<td>".$outsdate."</td>
			<td>".$outstatus."</td>
			<td>";?>
			<form action="change_script.php" method="POST">
				<input type="hidden" class="form-control" placeholder="ID" name="id" required ="true" value="<?php echo $outid;?>">
				<select name="status" size="1">
						<option value="Pending">Pending</option>
						<option value="Approved">Approved</option>
						<option value="Disapproved">Disapproved</option>
				</select>
				<button type="submit" name="submit" class="btn btn-primary pull-right">Change</button>
			</form>
			</td></tr>
		<?php	
		}
     }
     else
		echo 'N/A';
     ?>

		</table> 
</body>
</html>
