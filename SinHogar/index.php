
<?php 

   session_start();

   if(isset($_SESSION["Username"])){
   $Username=$_SESSION["Username"];
}
?>


<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>SIN HOGER</title>
  <meta name="description" content="admin">
  <meta name="author" content="CHAOUFI/CHATER">
  <link rel="stylesheet" href="CSS/index.css" >
  </head>

<body>

<div class="navbar">
<ul>
     <li><a href="index.php"class="active">Home</a></li>
	 <li><a href="Pages/declarehomless.php">Declare Homless</a></li>
	 <li><a href="Pages/donation.php">Donation</a></li>
	 <li><a href="Pages/product1.php">Products</a></li>
	 <li><a href="Pages/Listevents.php">Events</a></li>
	 <li><a href="Pages/login.php">login</a></li>
	 <li><a href="Pages/inscription.php">Inscription</a></li>
	 <li><a href="Pages/contact.php">Contact</a></li>

</ul>
</div>

<section class="sec1"><img src="img/coc.PNG">

	


<br>
	<h2>SIN HOGER</h2>

	<p>"Having a home is the best feeling of all"</p>
</section>

<section class="sec2">
	<p>
		"Sin hogar"  is one of the solutions to help homeless people. 
It is an online association presented by a web application that provides a link between us and the homeless, to help <a href="Pages/declarehomless.php"> detect their locations </a> and offer a lot of functionalities as the possibility of <a href="Pages/donation.php">giving donations</a>, <a href="Pages/inscription.php">being a volunteer</a> and organizing online meetings to discuss the events and the actions that will take place.
You can help homeless people by bying our <a href="Pages/product1.php">products!</a>.
	</p>
&nbsp;
&nbsp;

<video width="1000" height="500" controls="controls">
  <source src="video/sh.mp4" type="video/mp4" />
</video>
</section>

<section class="sec3"></section>

<section class="sec4">

<p>
	SIN HOGER EVENTS WELCOME EVERYONE!!
</p>

	<br>
	<br>
	<br>


<!-- Traitement -->
<?php
include("Config/sinhogar.php");



$sql= "SELECT * FROM event where type_event='public' ORDER BY id_event DESC LIMIT 3 ";
$result2=mysqli_query($link,$sql);

while ($donnees=$result2->fetch_assoc())
{

$image=$donnees['image'];
$title=$donnees['title'];
$informations=$donnees['short_info'];
$id_event=$donnees['id_event'];

	?>		
	


<dl >
  	<img src="<?php echo $image ?>" height="200" width="200" style="float: left;" > 
<br>

  <dt>	
<?=$title;  ?> </dt>


  <<dd><?=$informations;  ?> <a href="Pages/event.php?name=<?php  echo $id_event ?>"> more </a></dd>

</dl> 
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>


<?php };

?>

<!-- Fin du traitement -->

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		<a href="Pages/Listevents.php">Consulter la liste des événements</a>						
    

</section>
<section class="sec5"></section>



<!-- Footer -->
			<footer id="footer">
				<div>
					<a href="https://www.twitter.com" target="_self"><img src="img/twitter_online_social_media-128.webp" alt="Image introuvable" height="50" width="50" style="float:center-left"/></a> 
				    <a href="https://www.facebook.com" target="_self"><img src="img/online_social_media_facebook-128.webp" alt="Image introuvable" height="50" width="50" style="float:center-left"/></a> 
					<a href="https://www.gmail.com" target="_self"><img src="img/online_social_media_google_plus-128.webp" alt="Image introuvable" height="50" width="50" style="float:center-left"/></a> 
					<a href="https://www.Instagram.com" target="_self"><img src="img/instagram_online_social_media_photo-128.webp" alt="Image introuvable" height="50" width="50" style="float:center-left"/></a>

				<div class="copyright">
					&copy; 
				</div>
			</footer>
 </body>


</html>