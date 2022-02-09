<?php session_start();

if(!isset($_SESSION["userName"]))
{
	header('Location:Login.php');
}


 ?>
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
		
		<?php
		$con = mysqli_connect("localhost:3306","root","","artdb");
		if(!$con)
		{	
			die("Cannot connect to DB server");		
		}
		
		
		$sql = "SELECT * FROM `art` WHERE `id`='".$_GET['id']."'";	
		$image="";		
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result)> 0)
		{
			
			$row = mysqli_fetch_assoc($result);
			$image  = $row['imagePath'];	
		?>
      <td colspan="2"><form action="editArt.php?id=<?php echo $_GET['id'];?>"  method="post" enctype="multipart/form-data">
        ;
        <table width="438" border="0" align="center">
          <tr>
            <td colspan="2" bgcolor="#FFFFFF"><div align="center"><img src="../images/maxresdefault.jpg" width="165" height="166" /></div>
              <h1><center>Edit Art</center></h1></td>
          </tr>
          <tr>
            <td width="146">Name / Title</td>
            <td width="282"><input type="text" name="txtTitle" id="txtTitle" value= "<?php echo $row['title'];?>"/></td>
          </tr>
          <tr>
            <td>Images</td>
            <td><input type="file" name="fileImage" id="fileImage" /></td>
          </tr>
          <tr>
            <td>Price</td>
            <td><input type="text" name="txtPrice" id="txtPrice" value="<?php echo $row['price'];?>"/></td>
          </tr>
          <tr>
            <td colspan="2"><br />
              <label for="chkBooks">
                <input type="checkbox" name="chkPublish" id="chkPublish" <?php if($row['status']== 1){
				echo "checked";
			}
			?>/>
                Publish this<br />
                <br>
				  
				  <?php
			if(isset($_POST['btnSubmit']))
			{
				if(is_uploaded_file($_FILES['fileImage']['tmp_name']))
				{
   				$image = "uploads/".basename($_FILES["fileImage"]["name"]);
				move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);
				}  
			
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
				
				$con = mysqli_connect("localhost:3306","root","","artdb");
			if(!$con)
			{	
				die("Cannot upload the file, Please choose another file");		
			}
			$sql = "UPDATE `art` SET `title` = '
			".$title."', `price` = '".$price."', `imagePath` = '".$image."', `status` = '".$status."' WHERE `art`.`id` = ".$_GET['id'].";";
	   
	if(  mysqli_query($con,$sql))
	{
		echo "Creation is updated Successfully";
	}
	else
		echo "Opps something is wrong, Please select the file again";
			}
			
			
			?>
                <br />
              </label></td>
          </tr>
          <tr>
            <td colspan="2"><blockquote> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Update"   />
              <input name="btnReset" type="reset" class="button" id="btnReset" value="Cancel"   />
            </blockquote></td>
			  
			  <?php }
		?>
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
