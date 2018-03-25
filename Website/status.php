<?php 
session_start();
if (!isset($_SESSION['email']))
	header('location: index.php');
	
	require_once("connection.php");
     $current = $_SESSION['email'];
	$id="SELECT A_ID FROM applications WHERE Email = '$current'";
	$days="SELECT Days FROM applications WHERE Email = '$current'";
	$rno="SELECT Roll_No FROM applications WHERE Email = '$current'";
	$reason="SELECT Reason FROM applications WHERE Email = '$current'";
	$sdate="SELECT S_Date FROM applications WHERE Email = '$current'";
	$status="SELECT Status FROM applications WHERE Email = '$current'";
	
	$result0 = mysqli_query($con, $id);
	$result1 = mysqli_query($con, $days);
	$result2 = mysqli_query($con, $rno);
	$result4 = mysqli_query($con, $reason);
	$result5 = mysqli_query($con, $sdate);
	$result6 = mysqli_query($con, $status);
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>LeaveApp | Status</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
			<p></p>
		<div class="container-fluid">
			<?php include("navbar-after-login.php"); ?>
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
			<th>Reason</th>
			<th>Start Date</th>
			<th>No of Days</th>
			<th>Status</th>
			<th></th>
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
			$outdays =  $row1['Days'];
			$row4 = mysqli_fetch_array($result4);
			$outreason =  $row4['Reason'];
			$row5 = mysqli_fetch_array($result5);
			$outsdate =  $row5['S_Date'];
			$row6 = mysqli_fetch_array($result6);
			$outstatus =  $row6['Status'];
			
			echo "<tr><td>".$outid."</td>
			<td>".$outrno."</td>
			<td>".$outreason."</td>
			<td>".$outsdate."</td>
			<td>".$outdays."</td>
			<td>".$outstatus."</td>
			<td><form action='withdraw_script.php' method=POST>
			<input type='hidden' class='form-control' placeholder='ID' name='id' required = 'true' value='".$outid."'>
			<button type='submit' name='submit' class='btn btn-primary pull-right'>Withdraw</button>
			</form></td></tr>";
		}
     }
     else
		echo 'N/A';
		?>
		</table> 
</body>
</html>
