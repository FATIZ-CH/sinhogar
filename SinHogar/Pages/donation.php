
<?php  



include("../Config/sinhogar.php");

$insert = "INSERT INTO `user` (`profile`) VALUES ('donateur')";


$result1 = mysqli_query($link,$insert);


?>



<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>PAGES</title>
  <meta name="description" content="admin">
  <meta name="author" content="F.CHAOUFI">
  <link rel="stylesheet" href="../CSS/cssli.css" >
  </head>

<body>
<div class="navbar">

<ul>
	 <li><a href="../index.php">Home</a></li>
	 <li><a href="declarehomless.php">Declare Homless</a></li>
	 <li><a href="donation.php" class="active">Donation</a></li>
	 <li><a href="product1.php">Products</a></li>
	 <li><a href="Listevents.php">Events</a></li>
	 <li><a href="login.php">login</a></li>
	 <li><a href="inscription.php">Inscription</a></li>
	 <li><a href="contact.php">Contact</a></li>

</ul>


</div>
<section class="sec1">
	<img src="../img/coc.PNG">
	<br>
<br>
	<h2>SIN HOGER</h2>

	<p>"Thank you for visiting this page, just thinking to help homeless people makes us happy"</p>
</section>
<section class="sec2">
<p> HELP US BY CLICKING ON ONE OF THE SUGGESTIONS ||</p>

<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
<script position="center">paypal.Buttons().render('body');</script>



</section>



<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<a href="https://www.twitter.com" target="_self"><img src="../img/twitter_online_social_media-128.webp" alt="Image introuvable" height="50" width="50" style="float:center-left"/></a> 
				    <a href="https://www.facebook.com" target="_self"><img src="../img/online_social_media_facebook-128.webp" alt="Image introuvable" height="50" width="50" style="float:center-left"/></a> 
					<a href="https://www.gmail.com" target="_self"><img src="../img/online_social_media_google_plus-128.webp" alt="Image introuvable" height="50" width="50" style="float:center-left"/></a> 
					<a href="https://www.Instagram.com" target="_self"><img src="../img/instagram_online_social_media_photo-128.webp" alt="Image introuvable" height="50" width="50" style="float:center-left"/></a>
<i class="fa fa-facebook-square" style="font-size:48px;color:red"></i>

				<div class="copyright">
					&copy; Untitled. All rights reserved.
				</div>
			</footer>
 </body>
</html>