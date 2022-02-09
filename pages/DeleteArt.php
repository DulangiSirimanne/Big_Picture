<?php
session_start(); 
if (!isset($_SESSION["userName"]))
{
	header('Location:Login.php');

}
$con = mysqli_connect("localhost:3306","root","","artdb");
			if(!$con)
			{	
				die("Cannot upload the file, Please choose another file");		
			}
			$sql = "DELETE FROM `art` WHERE `art`.`id` = ".$_GET['id'];
	   
	  	mysqli_query($con,$sql);	
		header('Location:Gallery.php');
	

	?>
