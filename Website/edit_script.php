<?php
	error_reporting(0);
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$name = $_POST['cname'];
		$name = mysqli_real_escape_string($con,$name);
		$name = strip_tags($name);
		
		$email = $_POST['ce-mail'];
		$email = mysqli_real_escape_string($con,$email);
		$email = strip_tags($email);
		
		$rno = $_POST['crno'];
		$rno = mysqli_real_escape_string($con,$rno);
		$rno = strip_tags($rno);
		
		$contact = $_POST['ccontact'];
		$contact = mysqli_real_escape_string($con,$contact);
		$contact = strip_tags($contact);
		
		$prog = $_POST['cprog'];
		$prog = mysqli_real_escape_string($con,$prog);
		$prog = strip_tags($prog);

		$dept = $_POST['cdept'];
		$dept = mysqli_real_escape_string($con,$dept);
		$dept = strip_tags($dept);

		$hostel = $_POST['chostel'];
		$hostel = mysqli_real_escape_string($con,$hostel);
		$hostel = strip_tags($hostel);

		$address = $_POST['caddress'];
		$address = mysqli_real_escape_string($con,$address);
		$address = strip_tags($address);
		
		$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		$regex_num = "/^[789][0-9]{9}$/";
		//$query = "SELECT * FROM table WHERE Email='$email'";
		$result = mysqli_query($con, $query);
		$num = mysqli_num_rows($result);

		if (!preg_match($regex_num, $contact))
			{
			$m = "<span style='color: red;'>Not a valid phone number</span>";
			header('location: signup.php?m2='.$m);
			}
		else{
			
			$query = "UPDATE persons SET
			Name='{$name}', Roll_No='{$rno}', Contact='{$contact}', Programme='{$prog}', Dept='{$dept}', Hostel='{$hostel}', Address='{$address}'
			WHERE Email='{$email}'";
			
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
