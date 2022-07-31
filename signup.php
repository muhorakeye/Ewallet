<?php

	include('db/dbconn.php');
	if (isset($_POST['signup']))
{
	$firstname=$_POST['Full_Names'];
	$telephone=$_POST['telephone'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$check = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `wallet` WHERE `email` = '$email'"));
		if($check == 1)
			{
				echo "<script>alert('EMAIL ALREADY EXIST')</script>";	 
			}
			
			else
				{
					mysqli_query ($conn, "INSERT INTO customer (Full_Names, Telephone, email, password)
					VALUES ('$Full_Names', '$Telephone', '$email', '$password')") 
					or die(mysqli_error());	
				}				
					
}
?>