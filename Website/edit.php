<?php 
session_start();
if (!isset($_SESSION['email']))
	header('location: index.php');
	
	require_once("connection.php");
     $current = $_SESSION['email'];
	$id="SELECT ID FROM persons WHERE Email = '$current'";
	$name="SELECT Name FROM persons WHERE Email = '$current'";
	$rno="SELECT Roll_No FROM persons WHERE Email = '$current'";
	$contact="SELECT Contact FROM persons WHERE Email = '$current'";
	$prog="SELECT Programme FROM persons WHERE Email = '$current'";
	$dept="SELECT Dept FROM persons WHERE Email = '$current'";
	$hostel="SELECT Hostel FROM persons WHERE Email = '$current'";
	$address="SELECT Address FROM persons WHERE Email = '$current'";
	
	$result0 = mysqli_query($con, $id);
	$result1 = mysqli_query($con, $name);
	$result2 = mysqli_query($con, $rno);
	$result3 = mysqli_query($con, $contact);
	$result4 = mysqli_query($con, $prog);
	$result5 = mysqli_query($con, $dept);
	$result6 = mysqli_query($con, $hostel);
	$result7 = mysqli_query($con, $address);
	
	if(mysqli_num_rows($result1)>0)
     {
		$row1 = mysqli_fetch_array($result1);
		$outname =  $row1['Name'];
     }
     else
     {
		$outname ='notworking';         
     }
     if(mysqli_num_rows($result2)>0)
     {
		$row2 = mysqli_fetch_array($result2);
		$outrno =  $row2['Roll_No'];
     }
     else
     {
		$outrno ='notworking';         
     }
     if(mysqli_num_rows($result3)>0)
     {
		$row3 = mysqli_fetch_array($result3);
		$outcon =  $row3['Contact'];
     }
     else
     {
		$outcon ='notworking';         
     }
     if(mysqli_num_rows($result4)>0)
     {
		$row4 = mysqli_fetch_array($result4);
		$outprog =  $row4['Programme'];
     }
     else
     {
		$outprog ='notworking';         
     }
     if(mysqli_num_rows($result5)>0)
     {
		$row5 = mysqli_fetch_array($result5);
		$outdept =  $row5['Dept'];
     }
     else
     {
		$outdept ='notworking';         
     }
     if(mysqli_num_rows($result6)>0)
     {
		$row6 = mysqli_fetch_array($result6);
		$outhostel =  $row6['Hostel'];
     }
     else
     {
		$outhostel ='notworking';         
     }
     if(mysqli_num_rows($result7)>0)
     {
		$row7 = mysqli_fetch_array($result7);
		$outaddress =  $row7['Address'];
     }
     else
     {
		$outaddress ='notworking';         
     }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>LeaveApp | Profile</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="container-fluid">
			<?php include("navbar-after-login.php"); ?>
			<br>
			<br>
			<br>
			<div class="col-lg-4" align="center"></div>
			<div class="col-lg-4" align="center">
				<form action=edit_script.php method="POST">
					Name: 
					<div class="form-group">
						<input class="form-control" type="" placeholder="Name" name="cname" required = "true" value="<?php echo $outname;?>">
					</div>
					<div class="form-group">
						<input class="form-control" type="hidden" placeholder="Email" name="ce-mail" required = "true" value="<?php echo $current;?>">
					</div>
					Roll No.:
					<div class="form-group">
						<input type="" class="form-control" placeholder="Roll No" name="crno" required = "true" value="<?php echo $outrno;?>">
					</div>
					Contact No.:
					<div class="form-group">
						<input type="" class="form-control"  placeholder="Student's Contact" name="ccontact" required = "true" value="<?php echo $outcon;?>">
					</div>
					Programme:
					<div class="form-group">
						<input class="form-control" type="" placeholder="Programme" name="cprog" required = "true" value="<?php echo $outprog;?>">
					</div>
					Department:
					<div class="form-group">
						<input class="form-control" type="" placeholder="Department" name="cdept" required = "true" value="<?php echo $outdept;?>" >
					</div>
					Hostel:
					<div class="form-group">
						<input class="form-control" type="" placeholder="Hostel" name="chostel" required = "true" value="<?php echo $outhostel;?>">
					</div>
					Address:
					<div class="form-group">
						<input type="" class="form-control"  placeholder="Reason" name="caddress" required = "true" value="<?php echo $outaddress;?>">
					</div>
			<button type="submit" name="submit" class="btn btn-primary pull-right">Save</button>
		</form>
		</div>
</body>
</html>
