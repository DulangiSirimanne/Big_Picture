<?php session_start();
if(!isset($_SESSION["userName"])){
	header('Location:Login.php');
}
?>
	
	
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gallery</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/styles.css">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  display: block;
  width: 100%;
  height: calc(80vh / 1.9);
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
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
	<br>
	<br>

	

	
	
	
	

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image1.html">
      <img src="../images/1.jpg" alt="The Silent Whisper" width="600" height="400">
    </a>
    <div class="desc">The Silent Whisper</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image2.html">
      <img src="../images/2.jpg" alt="The Village" width="600" height="400">
    </a>
    <div class="desc">The Village</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image3.html">
      <img src="../images/3.jpg" alt="Her" width="600" height="400">
    </a>
    <div class="desc">Her</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image4.html">
      <img src="../images/4.jpg" alt="Mirror you" width="600" height="400">
    </a>
    <div class="desc">Mirror you</div>
  </div>
</div>
	
	<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image5.html">
      <img src="../images/5.jpg" alt="Think loud" width="600" height="400">
    </a>
    <div class="desc">Think loud</div>
  </div>
</div>
	
	<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image6.html">
      <img src="../images/6.jpg" alt="Traditional Art" width="600" height="400">
    </a>
    <div class="desc">Traditional Art</div>
  </div>
</div>
	
	<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image7.html">
      <img src="../images/7.jpg" alt="The Longest Ride" width="600" height="400">
    </a>
    <div class="desc">The Longest Ride</div>
  </div>
</div>
	
	<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image8.html">
      <img src="../images/8.jpg" alt="Night Changes" width="600" height="400">
    </a>
    <div class="desc">Night Changes</div>
  </div>
</div>
	
	<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image9.html">
      <img src="../images/9.jpg" alt="Mr Noboby" width="600" height="400">
    </a>
    <div class="desc">Mr Noboby</div>
  </div>
</div>
	
	<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image10.html">
      <img src="../images/10.jpg" alt="Abstract Art" width="600" height="400">
    </a>
    <div class="desc">Abstract Art</div>
  </div>
</div>
	
	<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image11.html">
      <img src="../images/11.jpg" alt="Rising Sunshine" width="600" height="400">
    </a>
    <div class="desc">Rising Sunshine</div>
  </div>
</div>
	
	<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image12.html">
      <img src="../images/12.jpg" alt="The Long Night" width="600" height="400">
    </a>
    <div class="desc">The Long Night</div>
  </div>
</div>
	
	<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="../images/13.jpg">
      <img src="../images/13.jpg" alt="Paint My Love" width="600" height="400">
    </a>
    <div class="desc">Paint My Love</div>
  </div>
</div>
	
	<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="../images/14.jpg">
      <img src="../images/14.jpg" alt="Marine" width="600" height="400">
    </a>
    <div class="desc">Marine</div>
  </div>
</div>
	
	<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="../images/15.jpg">
      <img src="../images/15.jpg" alt="One day" width="600" height="400">
    </a>
    <div class="desc">One day</div>
  </div>
</div>
	

</body>
</html>
