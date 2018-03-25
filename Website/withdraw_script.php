<?php
	error_reporting(0);
	require_once("connection.php");
	if(isset($_POST['submit']))
	{
		$id = $_POST['id'];
		$id = mysqli_real_escape_string($con,$id);
		$id = strip_tags($id);

		$query = "DELETE FROM applications WHERE A_ID='{$id}'";
		//$query = "INSERT INTO test(ID, Status) VALUES ('{$id}','{$status}')";
			
			if(mysqli_query($con,$query)){
				session_start();
				$_SESSION['email2']=$email;
				header('location: home.php');	
			}else{
				echo "error while updating the records".mysqli_error($con);
			}
		}
?>
