<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
      <td colspan="2"><form action="UpdateArt.php" method="post" enctype="multipart/form-data">
      ;
      <table width="438" border="0" align="center">
      <tr>
        <td colspan="2" bgcolor="#FFFFFF"><div align="center"><img src="../images/maxresdefault.jpg" width="165" height="166" /></div>
          <h1><center>Add Artwork</center></h1></td>
        </tr>
      <tr>
        <td width="146">Name / Title</td>
        <td width="282"><input type="text" name="txtTitle" id="txtTitle" /></td>
      </tr>
      <tr>
        <td>Images</td>
        <td><input type="file" name="fileImage" id="fileImage" /></td>
      </tr>
      <tr>
        <td>Price</td>
        <td><input type="text" name="txtPrice" id="txtPrice" /></td>
      </tr>
      
      <tr>
        <td colspan="2"><br />
          <label for="chkBooks">
            <input type="checkbox" name="chkPublish" id="chkPublish" />
            Publish this<br />
            <br />
          </label></td>
        </tr>
      <tr>
        <td colspan="2"><blockquote>
        
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Add Now"   />
            <input name="btnReset" type="reset" class="button" id="btnReset" value="Cancel"   />
			<br>
			
			<?php
			if(isset($_POST["btnSubmit"]))
			{
				$title = $_POST["txtTitle"];
				$price = $_POST["txtPrice"];
				
				if(isset($_POST["chkPublish"]))
				{
					$status = 1;
				}
				else
				{
					$status = 0;
				}
				$image = "uploads/".basename($_FILES["fileImage"]["name"]);
			move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);
			
			$con = mysqli_connect("localhost:3306","root","","artdb");
			if(!$con)
			{	
				die("Cannot upload the file, Please choose another file");		
			}
			$sql = "INSERT INTO `artdb`.`art` ( `title`, `price`, `imagePath`, `status`) VALUES ( '".$title."', '".$price."', '".$image."', '".$status."');";
	   
	if(  mysqli_query($con,$sql))
	{
		echo "Artwork uploaded Successfully!";
	}
	else
		echo "Opps something is wrong, Please select the file again.";
			}
			?>
         
        </blockquote></td>
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