<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>SIN HOGER</title>
  <meta name="description" content="admin">
  <meta name="author" content="CHAOUFI/CHATER">
  <link rel="stylesheet" href="../CSS/contact.css" >
  </head>

<body>

<div class="navbar">

<ul>
	 <li><a href="../index.php">Home</a></li>
	 <li><a href="declarehomless.php">Declare Homless</a></li>
	 <li><a href="donation.php" >Donation</a></li>
	 <li><a href="product1.php">Products</a></li>
	 <li><a href="Listevents.php">Events</a></li>
	 <li><a href="login.php">login</a></li>
	 <li><a href="inscription.php">Inscription</a></li>
	 <li><a href="contact.php" class="active">Contact</a></li>
</ul>

</div>

<section class="sec1"><img src="../img/coc.PNG">
<br>
	<h2>SIN HOGER</h2>

	<p>We are waiting for your comments to proceed further !</p>
</section>

<section class="sec2">
<img position="center" src="../img/coc.PNG">

<form class="box" action="contact1.php" method="post">
  <h1>contact</h1>
  <input id="b" type="text" name="firstName_browser" placeholder="Firstname" required>
  <input id="c" type="text" name="lastName_browser" placeholder="Lastname" required>
  <input type="gmail" name="mail_browser" placeholder="Gmail" required>
  <textarea id="a" type="text" name="contents" placeholder="Contents" required></textarea>
  <input type="submit" name="" value="ENVOYER"onclick="ENVOYER()">
</form>
</section>

<script>
function ENVOYER(){
<?php
include("contact1.php");

?>	}
</script>

<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<a href="https://www.twitter.com" target="_self"><img src="../img/twitter_online_social_media-128.webp" alt="Image introuvable" height="50" width="50" style="float:center-left"/></a> 
				    <a href="https://www.facebook.com" target="_self"><img src="../img/online_social_media_facebook-128.webp" alt="Image introuvable" height="50" width="50" style="float:center-left"/></a> 
					<a href="https://www.gmail.com" target="_self"><img src="../img/online_social_media_google_plus-128.webp" alt="Image introuvable" height="50" width="50" style="float:center-left"/></a> 
					<a href="https://www.Instagram.com" target="_self"><img src="../img/instagram_online_social_media_photo-128.webp" alt="Image introuvable" height="50" width="50" style="float:center-left"/></a>
<i class="fa fa-facebook-square" style="font-size:48px;color:red"></i>

				<div class="copyright">
					&copy; 
				</div>
			</footer>
 </body>


</html>