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
<link rel="stylesheet" type="text/css" href="../css/dashBoardStyle.css"/>
<style>
body {
  background-image: url("../images/Bg_pic2.jpg");
}
	
table {background-color: lightblue;}
</style>
</head>

<body>
	<br><br><br><br><br><br><br><br>
	<table width="908" height="225" align="center">
    <tbody>
	<tr>
      <td colspan="2"><h1 style="color:black;"><center>Administrator Profile</center></h1></td>
    </tr>
	<tr>
      <td colspan="2"><div class="main-section">
      <div class="dashbord">
        <div class="icon-section"> <br />
          <img src="../images/admi_1.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="UpdateArt.php">Update Art </a> </div>
      </div>
      <div class="dashbord dashbord-blue">
        <div class="icon-section"> <br />
          <img src="../images/admin_2.jpg" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="Gallery.php">Edit Art</a> </div>
      </div>
    </div></td>
    </tr>
  </tbody>
</table>
</body>
</html>