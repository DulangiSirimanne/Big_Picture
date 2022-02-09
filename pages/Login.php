<!---
?php
require('functions.inc.php');
?>
--->
<?php session_start(); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">

<style>
	
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>

<body>	

<h1><center>THE BIG PICTURE</center></h1>

<form action="Login.php" method="post"><!---post: passing using names and passwords which we have to give security -->
  <div class="imgcontainer">
    <img src="../images/maxresdefault.jpg" alt="maxresdefault" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="txtname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="txtpassword" required>
	
	
  <!---  <label for="name"><?php echo $DPICountValue; ?></label> --->
	
        
    <button type="submit" name="btnsubmit">Login</button>
    <p>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </p>
    <p>
	  <?php
		if(isset($_POST["btnsubmit"])){
		
		$userName = $_POST["txtname"];
		$password = $_POST["txtpassword"];
		
		
				$con = mysqli_connect("localhost:3306","root","","artdb");
				if(!$con)
				{	
						die("Sorry, We are facing a technical issue");		
				}
		
		$admin="dulangi";
		if($admin==$userName)
		{
		$sql = "SELECT * FROM `user` WHERE `name`='".$userName."' AND `password`='".$password."';";
				$results = mysqli_query($con,$sql)	;
										
				if(mysqli_num_rows($results)>0)
				{
					$_SESSION["userName"] = $userName;
					header('Location:Admin.php');
				}
				else
				{ 
					echo "Please enter a correct user name and a
					password";
				}
		}

		else
		{
		$sql = "SELECT * FROM `user` WHERE `name`='".$userName."' AND `password`='".$password."';";
				$results = mysqli_query($con,$sql)	;
										
				if(mysqli_num_rows($results)>0)
				{
					$_SESSION["userName"] = $userName;
					header('Location:HomePage.html');
				}
				else
				{ 
					echo "Please enter a correct user name and a
					password";
				}			
		}
		}
		?>
	  </p>
  </div>

  <div class="container" style="background-color:#f1f1f1">
	 <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Not Registered? <a href="R_FORM.php">Click Here</a></span> 
  </div>
</form>
<footer class="footer">
	<div class="footer-bottom">
	    <p>525 Old Kesbewa Rd, Nugegoda</p>
        <p>Tel: 011-2727115</p>
        <p><b>INFO@THEBIGPICTURE.com</b></p><br>
		<p>All Right reserved by &copy;conceptial 2021</p>
	</div>
</footer>
</body>
</html>

