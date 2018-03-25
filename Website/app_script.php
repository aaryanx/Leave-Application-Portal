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
		
		$contact2 = $_POST['ccontact2'];
		$contact2 = mysqli_real_escape_string($con,$contact2);
		$contact2 = strip_tags($contact2);

		$prog = $_POST['cprog'];
		$prog = mysqli_real_escape_string($con,$prog);
		$prog = strip_tags($prog);
		
		$dept = $_POST['cdept'];
		$dept = mysqli_real_escape_string($con,$dept);
		$dept = strip_tags($dept);

		$hostel = $_POST['chostel'];
		$hostel = mysqli_real_escape_string($con,$hostel);
		$hostel = strip_tags($hostel);
		
		$sdate = $_POST['csdate'];
		$sdate = mysqli_real_escape_string($con,$sdate);
		$sdate = strip_tags($sdate);
		
		$days = $_POST['cdays'];
		$days = mysqli_real_escape_string($con,$days);
		$days = strip_tags($days);
		
		$type = $_POST['ctype'];
		$type = mysqli_real_escape_string($con,$type);
		$type = strip_tags($type);
		
		$reason = $_POST['creason'];
		$reason = mysqli_real_escape_string($con,$reason);
		$reason = strip_tags($reason);
		
			
			$query = "INSERT INTO applications(Name, Email, Roll_No, S_Contact, G_Contact, Programme, Dept, Hostel, S_Date, Days, Type, Reason)
			VALUES
			('{$name}','{$email}','{$rno}','{$contact}','{$contact2}','{$prog}','{$dept}','{$hostel}','{$sdate}','{$days}','{$type}','{$reason}')";
			if(mysqli_query($con,$query)){
				session_start();
				$_SESSION['email']=$email;
				header('location: success.php');	
			}else{
				echo "error while inserting the records".mysqli_error($con);
			}
		}
?>

