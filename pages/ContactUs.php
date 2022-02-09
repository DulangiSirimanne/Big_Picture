<?php session_start();
if(!isset($_SESSION["userName"])){
	header('Location:Login.php');
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/styles.css">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<style>
	body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>

<body>
	
			<header>
		<div class="overlay"></div>
		<nav>
			<h2 style="color:white">THe BIG PICTURE</h2>
			<ul>
				<li><a href="HomePage.html">Home</a></li>
				<li><a href="DisplayProducts.php">Gallery</a></li>
				<li class="cart"><a href="Cart.php"><ion-icon name="basket"></ion-icon>Cart<span>0</span></a></li>
				<li><a href="ContactUs.php">Contact</a></li>
			</ul>
		</nav>
	</header>
	


<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Do not hesitate to contact</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="../images/contact us.jpg" alt="contact us" style="width:100%">
    </div>
    <div class="column">
      <form action="ContactUs.php">
        <p>
          <label for="fname">First Name</label>
          <input type="text" name="fname" id="fname" name="firstname" placeholder="Your name..">
          <label for="lname">Last Name</label>
          <input type="text" name="lastname" id="lname" name="lastname" placeholder="Your last name..">
          <label for="country">Country</label>
          <input type="text" name="yourCountry" id="yourCountry" name="country">
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
          <input type="submit" name="btnSubmit" id="btnSubmit" value="Submit">
        </p>
        <p>&nbsp;</p>
        <p>
		  
		  		<?php
			if(isset($_POST["btnSubmit"]))
			{
				
				$firstName = $_POST["fname"];
			    $lastName = $_POST["lname"];
				$country = $_POST["yourCountry"];
				$subject = $_POST["subject"];
				
				$con = mysqli_connect("localhost:3306","root","","artdb");
				if(!$con)
				{	
						die("Sorry, We are facing a technical issue");		
				}	
				$sql = "INSERT INTO `comment` (`firstName`, `lastName`, `country`, `subject`) VALUES ('".$firstName."', '".$lastName."', '".$country."', '".$subject."');";
				
				mysqli_query($con,$sql)	;
				
				mysqli_close($con);
				die("Thank you for the information!");
				header('Location:Login.php');
				
				
			}
	
	?>
		  
		  </p>
        <p>&nbsp;</p>
      </form>
    </div>
  </div>
</div>
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
