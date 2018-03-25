<?php 
	session_start();
	if (isset($_SESSION['email']))
	header('location: home.php');
	error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>LeaveApp | Sign Up</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="container-fluid decor_bg">
			<?php include("navbar-before-login.php"); ?>
			<div class="row decor_row">
				<div class="container">
					<div class="col-lg-8">
						<img class="img-responsive" src="images/yess2.png"/>
					</div>
					<div class="col-lg-4">
						<h2 style="color:#000;">SIGN UP</h2>
						<form  action="signup_script.php" method="POST">
							<div class="form-group">
								<input class="form-control" placeholder="Name" name="name" required = "true">
							</div>
							<div class="form-group">
								<input type="email" class="form-control"  placeholder="Email"  name="e-mail" required = "true"><?php echo $_GET['m1'];?>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Roll No" name="password" required = "true">
							</div>
							<div class="form-group">
								<input type="number" class="form-control"  placeholder="Contact" name="contact" required = "true" max="9999999999"><?php echo $_GET['m2'];?>
							</div>
							<div class="form-group">
								<font color="Black">Programme:
									<select name="prog" size="1">
									<option value="B.Tech./B.Des.">B.Tech./B.Des.</option>
									<option value="M.Tech./M.Des.">M.Tech./M.Des.</option>
									<option value="M.Sc.">M.Sc.</option>
									<option value="Ph.D.">Ph.D.</option>
									</select>
									</font>
							</div>
							<div class="form-group">
								<font color="Black">Department:
								<select name="dept" size="1">
									<option value="BSBE">BSBE</option>
									<option value="CL">CL</option>
									<option value="CH">CH</option>
									<option value="CE">CE</option>
									<option value="CSE">CSE</option>
									<option value="DOD">DOD</option>
									<option value="EEE">EEE</option>
									<option value="HSS">HSS</option>
									<option value="MA">MA</option>
									<option value="ME">ME</option>
									<option value="PH">PH</option>
								</select>
								</font>
							</div>
							<div class="form-group">
								<font color="Black">Hostel:
								<select name="hostel" size="1">
									<option value="Barak">Barak</option>
									<option value="Brahmaputra">Brahmaputra</option>
									<option value="Dhansiri">Dhansiri</option>
									<option value="Dibang">Dibang</option>
									<option value="Dihing">Dihing</option>
									<option value="Kameng">Kameng</option>
									<option value="Kapili">Kapili</option>
									<option value="Lohit">Lohit</option>
									<option value="Manas">Manas</option>
									<option value="Married Scholar">Married Scholar</option>
									<option value="Siang">Siang</option>
									<option value="Subansiri">Subansiri</option>
									<option value="Umiam">Umiam</option>
								</select>
								</font>
							</div>
							<div class="form-group">
								<input class="form-control"  placeholder="Address" name="address" required = "true">
							</div>
						  <button type="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_menu">
			<div class="container">
				<div class="row" style="color:#fff;margin-bottom:5px;">
					<div class="col-lg-4" >
						<div><h3>Information</h3></div>
						<div><a href="about.php">About Us</a></div>
						<div><a href="contact.php">Contact Us</a></div>
					</div>
					<div class="col-lg-4">
						<div><h3>My Account</h3></div>
						<div><a href="#myModal" role="button" data-toggle="modal">Login</a></div>
						<div><a href="signup.php">Signup</a></div>
					</div>
					<div class="col-lg-4">
						<div><h3>Contact Us</h3></div>
						<div>Contact: +91-9085971270</div>
					</div>
				</div>
			</div>
		</div>
		<?php include("modal.php"); ?>
	</body>
</html>
