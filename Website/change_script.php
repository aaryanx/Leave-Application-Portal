<?php
	error_reporting(0);
	require_once("connection.php");
	if(isset($_POST['submit']))
	{
		$id = $_POST['id'];
		$id = mysqli_real_escape_string($con,$id);
		$id = strip_tags($id);

		$status = $_POST['status'];
		$status = mysqli_real_escape_string($con,$status);
		$status = strip_tags($status);

		$query = "UPDATE applications SET Status='{$status}' WHERE A_ID='{$id}'";
		//$query = "INSERT INTO test(ID, Status) VALUES ('{$id}','{$status}')";
			
			if(mysqli_query($con,$query)){
				session_start();
				$_SESSION['email']=$email;
				header('location: home2.php');	
			}else{
				echo "error while updating the records".mysqli_error($con);
			}
		}
?>
