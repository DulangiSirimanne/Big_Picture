<?php session_start();
if(!isset($_SESSION["userName"])){
	header('Location:Login.php');
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/basicStyle - Copy.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<style>
	
body {
  background-image: url("../images/Bg_pic2.jpg");
}
	
table {background-color: lightblue;}
</style>
</head>
<body>
	<table width="908" height="225" align="center">
    <tbody>
		    <tr>
      <td colspan="2"><form action="Gallery.php" method="post">
        ;
        <table width="814" height="268" border="0" align="center">
          <tr>
            <td width="534" colspan="2" bgcolor="#FFFFFF"><div align="center"></div>
              <h1 style="color:black;"><center>Gallery</center></h1>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
				
				<?php 
				$con = mysqli_connect("localhost:3306","root","","artdb");
		if(!$con)
		{	
			die("Cannot connect to DB server");		
		}
				
		$_SESSION["userName"]="dulangi";	
		
		$sql ="SELECT * FROM `art` WHERE `status` = '1'";	
				
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result)> 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
								
				?>
				
			  <div class="image"><a href="<?php echo $row['imagePath'];?>">
				  
				  <img src="<?php echo $row['imagePath'];?>" width="134" height="128"></a>
				  <div class="desc"> <?php echo $row['title'];?>  <br>
				  <a href="editArt.php?id=<?php 
				echo $row['id']; ?>">edit</a> | <a href="DeleteArt.php?id=<?php 
				echo $row['id']; ?>">delete</a>
				  
				  </div>		
				</div>
			  
				<?php
			}
		}
		
				mysqli_close($con);
				?>
			  
			  </td>
          </tr>
          <tr>
            
          </tr>
        </table>
      </form></td>
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
</body>
</html>