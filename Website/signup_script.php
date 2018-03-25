<?php
	error_reporting(0);
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$name = mysqli_real_escape_string($con,$name);
		$name = strip_tags($name);
		
		$email = $_POST['e-mail'];
		$email = mysqli_real_escape_string($con,$email);
		$email = strip_tags($email);
		
		$password = $_POST['password'];
		$password = mysqli_real_escape_string($con,$password);
		$password = strip_tags($password);
		$password = MD5($password);
		
		$rno = $_POST['password'];
		$rno = mysqli_real_escape_string($con,$rno);
		$rno = strip_tags($rno);
		
		$contact = $_POST['contact'];
		$contact = mysqli_real_escape_string($con,$contact);
		$contact = strip_tags($contact);
		
		$prog = $_POST['prog'];
		$prog = mysqli_real_escape_string($con,$prog);
		$prog = strip_tags($prog);

		$dept = $_POST['dept'];
		$dept = mysqli_real_escape_string($con,$dept);
		$dept = strip_tags($dept);

		$hostel = $_POST['hostel'];
		$hostel = mysqli_real_escape_string($con,$hostel);
		$hostel = strip_tags($hostel);

		$address = $_POST['address'];
		$address = mysqli_real_escape_string($con,$address);
		$address = strip_tags($address);
		
		$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		$regex_num = "/^[789][0-9]{9}$/";
		$query = "SELECT * FROM table WHERE Email='$email'";
		$result = mysqli_query($con, $query);
		$num = mysqli_num_rows($result);

		if ($num != 0)
			{
			$m = "<span style='color:red;'>Email Already Exists</span>";
			header('location: signup.php?m1='.$m);
			}
		else if (!preg_match($regex_email, $email))
			{
			$m = "<span style='color: red;'>Not a valid Email Id</span>";
			header('location: signup.php?m1='.$m);
			}
		else if (!preg_match($regex_num, $contact))
			{
			$m = "<span style='color: red;'>Not a valid phone number</span>";
			header('location: signup.php?m2='.$m);
			}
		else{
			
			$query = "INSERT INTO persons
			(Name, Email, Password, Roll_No, Contact, Programme, Dept, Hostel, Address)
			VALUES
			('{$name}','{$email}','{$password}','{$rno}','{$contact}','{$prog}','{$dept}','{$hostel}','{$address}')";
			if(mysqli_query($con,$query)){
				session_start();
				$_SESSION['email']=$email;
				header('location: home.php');	
			}else{
				echo "error while inserting the records".mysqli_error($con);
			}
		}
	}
?>
