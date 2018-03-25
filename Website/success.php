<?php
	session_start();
	if (!isset($_SESSION['email']))
	header('location: index.php');
?>
<?php
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>LeaveApp | Submitted</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		</script>
	</head>
	<body>
		<div class="container-fluid">
			<?php include("navbar-after-login.php"); ?>
		<div class="col-lg-4 col-lg-offset-4" style="margin-top:80px;margin-bottom:10px;">
			<h5 align="center">The application has been submitted succesfully.
			The status shall be updated shortly.</h5><hr>
			<p align="center">View Status <a href="status.php" style="color:#0000f5";>here.</a></p>
			<p align="center">Apply Again <a href="home.php" style="color:#0000f5";>here.</a></p>
		</div>
	</body>
</html>
