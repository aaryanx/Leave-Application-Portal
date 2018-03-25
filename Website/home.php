<?php 
session_start();
if (!isset($_SESSION['email']))
	header('location: index.php');
	
	 require_once("connection.php");
     $current = $_SESSION['email'];
     //$dept ='Dept';
     $name="SELECT Name FROM persons WHERE Email = '$current'";
     $rno="SELECT Roll_No FROM persons WHERE Email = '$current'";
     $contact="SELECT Contact FROM persons WHERE Email = '$current'";
     $prog="SELECT Programme FROM persons WHERE Email = '$current'";
     $dept="SELECT Dept FROM persons WHERE Email = '$current'";
     $hostel="SELECT Hostel FROM persons WHERE Email = '$current'";
     $result1 = mysqli_query($con, $name);
     $result2 = mysqli_query($con, $rno);
     $result3 = mysqli_query($con, $contact);
     $result4 = mysqli_query($con, $prog);
     $result5 = mysqli_query($con, $dept);
     $result6 = mysqli_query($con, $hostel);
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
		$outroll =  $row2['Roll_No'];
     }
     else
     {
		$outroll ='notworking';         
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
		
		    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <!-- Load jQuery JS -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <!-- Load jQuery UI Main JS  -->
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    
    <!-- Load SCRIPT.JS which will create datepicker for input field  -->
    <script src="script.js"></script>
    
    <link rel="stylesheet" href="runnable.css" />
	</head>
	<body>
	<p></p>
		<div class="container-fluid">
			<?php include("navbar-after-login.php"); ?>
			<br>
			<br>
			<br>
			<br>
			<form  action="preview.php" method="POST" id="1">
				<p></p>
				<div class="col-lg-3" align="center"></div>
				<div class="col-lg-6" align="center">
			<!-	<div class="panel panel-default">
			<font size="4">
							Name:
							<div class="form-group">
								<input class="form-control" placeholder="Name" name="name" required = "true" value="<?php echo $outname; ?>">
							</div>
							E-Mail:
							<div class="form-group">
								<input class="form-control" placeholder="Email" name="e-mail" required = "true" value="<?php echo $_SESSION['email'] ?>">
							</div>
							Roll No.:
							<div class="form-group">
								<input type="number" class="form-control" placeholder="Roll No" name="rno" required = "true" value="<?php echo $outroll; ?>">
							</div>
							Student's Contact:
							<div class="form-group">
								<input type="number" class="form-control"  placeholder="Student's Contact" name="contact" required = "true" value="<?php echo $outcon; ?>">
							</div>
							Guardian's Contact:
							<div class="form-group">
								<input type="number" class="form-control"  placeholder="Guardian's Contact" name="contact2" required = "true">
							</div>
							Programme:
							<div class="form-group">
								<input class="form-control"  placeholder="Programme" name="prog" required = "true" value="<?php echo $outprog;?>">
							</div>
							Department:
							<div class="form-group">
								<input class="form-control"  placeholder="Department" name="dept" required = "true" value="<?php echo $outdept; ?>">
							</div>
							Hostel:
							<div class="form-group">
								<input class="form-control"  placeholder="Hostel" name="hostel" required = "true" value="<?php echo $outhostel ?>">
							</div>
							Start Date:
							<div class="form-group">
								<input type="date" class="form-control" id="datepicker" placeholder="Start Date" name="sdate" required = "true">
							</div>
							No. of Days:
							<div class="form-group">
								<input type="number" class="form-control" placeholder="Enter the no. of days of leave" name="days" required = "true">
							</div>
							Type:
							<div class="form-group">
								<select name="type" size=1>
									<option value="Official">Official</option>
									<option value="Personal">Personal</option>
									<option value="Other">Other</option>
								</select>
							</div>
							Reason:
							<div class="form-group">
								<!--<textarea name="reason" form="1">Enter..</textarea>-->
								<input type="text" class="form-control"  placeholder="Reason" name="reason" required = "true">
							</div>
							
							</font>
						  <button type="submit" name="submit" class="btn btn-primary pull-right">View and Submit</button>
				</form>
				</div>
				<!-</div>
				<br>
		</div>
	</body>
</html>
