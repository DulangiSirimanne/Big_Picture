<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form</title>
	<link rel="stylesheet" type="text/css" href="../css/R_Form.css" />
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<form id="form1" name="form1" action="R_FORM.php" method="post"> 
  <table width="630" height="485" border="0" align="center">
    <tbody>
      <tr>
        <td colspan="2"><h1>THE BIG PICTURE</h1></td>
      </tr>
      <tr>
        <td width="400">Full Name</td>
        <td width="211"><input type="text" name="txtfullName" id="txtfullName"></td>
      </tr>
      <tr>
        <td>Age</td>
        <td><input type="text" name="txtAgeName" id="txtAgeName"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="text" name="txtEmail" id="txtEmail"></td>
      </tr>
      <tr>
        <td>Password</td>
		  <label for="txtPassword"></label>
      <td><input type="password" name="txtPassword" id="txtPassword" class="datalist"></td>
        <td width="10">&nbsp;</td>
      </tr>
      <tr>
        <td>Confirm Password</td>
		<label for="txtConfirmPassword"></label> 
        <td><input type="password" name="txtConfirmPassword" id="txtConfirmPassword" class="datalist"></td>
      </tr>
      <tr>
        <td><p>Date</p></td>
		  
        <td><input type="date" name="date" id="date"></td>
      </tr>
      <tr>
        <td>Contact Number</td>
        <td><input type="text" name="txtContactNumber" id="txtContactNumber"></td>
      </tr>
      <tr>
        <td>Contact Address</td>
        <td><textarea name="txtAddress" id="txtAddress"></textarea></td>
      </tr>
      <tr>
        <td>NIC Number</td>
		<td><label for="txtPattern"></label>
        <input type="text" name="txtPattern" id="txtPattern" pattern="[0-9]{9}[Vv]"/></td>
      </tr>
      <tr>
        <td colspan="2"><input type="checkbox" name="checkbox" id="checkbox">          Email me the latest updates</td>
      </tr>
      <tr>
        <td>&nbsp;
      <input type="image" name="imageField" id="imageField" src="../images/maxresdefault.jpg" height="300px" width="400px"></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" id="submit" value="Submit"></td>
        <td><input type="reset" name="reset" id="reset" value="Reset"></td>
      </tr>
    </tbody>
  </table>
<footer class="footer">
	<div class="footer-bottom">
	    <p>525 Old Kesbewa Rd, Nugegoda</p>
        <p>Tel: 011-2727115</p>
        <p><b>INFO@THEBIGPICTURE.com</b></p><br>
		<p>All Right reserved by &copy;conceptial 2021</p>
	</div>
</footer>
</form>
		<?php
	if(isset($_POST["submit"])){
		$fullName = $_POST["txtfullName"];
		$age = $_POST["txtAgeName"];
		$email = $_POST["txtEmail"];
		$password = $_POST["txtPassword"];
		$date = $_POST["date"];
		$contactNumber = $_POST["txtContactNumber"];
		$address = $_POST["txtAddress"];
		$NIC = $_POST["txtPattern"];
		if(isset($_POST["checkbox"])){
			$in = "Email me the latest updates";
		}
		
		$con = mysqli_connect("localhost:3306","root","","artdb");
		if(!$con){
			die("Sorry, We are facing a technical issue");	
		}
	}
	$sql = "INSERT INTO `user` (`name`, `password`, `age`, `date`, `contactNumber`, `contactAddress`, `NIC`) VALUES ('".$fullName."', '".$password."', '".$age."', '".$date."', '".$contactNumber."', '".$address."', '".$NIC."');";
	
	mysqli_query($con,$sql);

	mysqli_close($con);
	die("Registration succeeded!");
	header('Location:Login.php');
	
	?>
</body>
</html>
