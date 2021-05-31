<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>PAGES</title>
  <meta name="description" content="admin">
  <meta name="author" content="F.CHAOUFI">
  <link rel="stylesheet" href="../CSS/eventsList.css" >
  </head>
<style>
#aa {
    font-size: 18px;
    line-height: 25px;
    margin-bottom: 10px;
    margin-top: 15px;
    color: red;
}


</style>
<body>
<div class="navbar">

<ul>
	 <li><a href="../index.php">Home</a></li>
	 <li><a href="declarehomless.php">Declare Homless</a></li>
	 <li><a href="donation.php" >Donation</a></li>
	 <li><a href="product1.php" >Products</a></li>
	 <li><a href="Listevents.php" class="active">Events</a></li>
	 <li><a href="login.php">login</a></li>
	 <li><a href="inscription.php">Inscription</a></li>
	 <li><a href="contact.php">Contact</a></li>
</ul>
</div>
<section class="sec1"><img src="../img/coc.PNG">
	<br>
<br>
	<h2>SIN HOGER</h2>

	<p>Welcome to our events</p>

</section>





<section class="sec2">  
<br>
<br><br>
	<!-- Traitement -->
<?php
include("../Config/sinhogar.php");
$sql= "SELECT * FROM event WHERE type_event='public' ";
$result2=mysqli_query($link,$sql);

while ($donnees=$result2->fetch_assoc())
{

 
$image=$donnees['image'];
$title=$donnees['title'];
$informations=$donnees['short_info'];
$id_event=$donnees['id_event'];

	?>			
	

                                 <div class="single-product">
								 <div class="product-f-image">
                                    
                                    <img src="<?php echo $image ?>" alt="" height="300" width="300" > 
  
                                </div>
                                
                                 <a id="aa" href="event.php?name=<?php  echo $id_event ?>"><?=$title;  ?></a>
                                
                                <div class="product-carousel-price">
									<span><?=$informations;  ?></span>
                                </div> 
                            </div>
							<br>
							<br>				
						<?php };

?>
	 
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