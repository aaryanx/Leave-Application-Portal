<?php 
session_start();
if (!isset($_SESSION['email']))
	header('location: index.php');
?>
<html>
	<head>
		<title>LeaveApp | Preview</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="col-lg-2" align="center"></div>
			<div class="col-lg-8" align="left">
		<div class="container-fluid">
			<?php include("navbar-after-login.php"); ?>
			<br>
			<br>
			<br>
			
		<div class="panel panel-default">
		<div class="form-group">	
		Name: <?php echo $_POST['name'];?>
		</div>
		<div class="form-group">
		E-Mail: <?php echo $_POST['e-mail'];?>
		</div>
		<div class="form-group">
		Roll No.: <?php echo $_POST['rno'];?>
		</div>
		<div class="form-group">
		Student's Contact: <?php echo $_POST['contact'];?>
		</div>
		<div class="form-group">
		Guardian's Contact: <?php echo $_POST['contact2'];?>
		</div>
		<div class="form-group">
		Programme: <?php echo $_POST['prog'];?>
		</div>
		<div class="form-group">
		Department: <?php echo $_POST['dept'];?>
		</div>
		<div class="form-group">
		Hostel: <?php echo $_POST['hostel'];?>
		</div>
		<div class="form-group">
		Start Date: <?php echo $_POST['sdate'];?>
		</div>
		<div class="form-group">
		End Date: <?php echo $_POST['days'];?>
		</div>
		<div class="form-group">
		Type: <?php echo $_POST['type'];?>
		</div>
		</div>
		Reason:
		<div class="panel panel-default">
		<div class="form-group">
		</div>
		<?php echo $_POST['reason'];?>
		</div>
		</div>
		<form action=app_script.php method="POST">
					<div class="form-group">
						<input class="form-control" type="hidden" placeholder="Name" name="cname" required = "true" value="<?php echo $_POST['name'];?>">
					</div>
					<div class="form-group">
						<input class="form-control" type="hidden" placeholder="Email" name="ce-mail" required = "true" value="<?php echo $_POST['e-mail'];?>">
					</div>
					<div class="form-group">
						<input type="hidden" class="form-control" placeholder="Roll No" name="crno" required = "true" value="<?php echo $_POST['rno'];?>">
					</div>
					<div class="form-group">
						<input type="hidden" class="form-control"  placeholder="Student's Contact" name="ccontact" required = "true" value="<?php echo $_POST['contact'];?>">
					</div>
					<div class="form-group">
						<input type="hidden" class="form-control"  placeholder="Guardian's Contact" name="ccontact2" required = "true" value="<?php echo $_POST['contact2'];?>">
					</div>
					<div class="form-group">
						<input class="form-control" type="hidden" placeholder="Programme" name="cprog" required = "true" value="<?php echo $_POST['prog'];?>">
					</div>
					<div class="form-group">
						<input class="form-control" type="hidden" placeholder="Department" name="cdept" required = "true" value="<?php echo $_POST['dept'];?>" >
					</div>
					<div class="form-group">
						<input class="form-control" type="hidden" placeholder="Hostel" name="chostel" required = "true" value="<?php echo $_POST['hostel'];?>">
					</div>
					<div class="form-group">
						<input type="hidden" class="form-control" id="datepicker" placeholder="Start Date" name="csdate" required = "true" value="<?php echo $_POST['sdate'];?>">
					</div>
					<div class="form-group">
						<input type="hidden" class="form-control" id="datepicker" placeholder="End Date" name="cdays" required = "true" value="<?php echo $_POST['days'];?>">
					</div>
					<div class="form-group">
						<input class="form-control"  type="hidden" placeholder="Type" name="ctype" required = "true" value="<?php echo $_POST['type'];?>">
					</div>
					<div class="form-group">
						<input type="hidden" class="form-control"  placeholder="Reason" name="creason" required = "true" value="<?php echo $_POST['reason'];?>">
					</div>
			<button type="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
		</form>
		<form action="home.php">
			<button type="submit" name="submit" class="btn btn-primary pull-left">Back</button>
		</form>
	</body>
</html>
