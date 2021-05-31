<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>PAGES</title>
  <meta name="description" content="admin">
  <meta name="author" content="F.CHAOUFI">
  <link rel="stylesheet" href="../CSS/product.css" >
  </head>

<body>
<div class="navbar">

<ul>
	 <li><a href="../index.php">Home</a></li>
	 <li><a href="declarehomless.php">Declare Homless</a></li>
	 <li><a href="donation.php" >Donation</a></li>
	 <li><a href="" class="active">Products</a></li>
	 <li><a href="Listevents.php">Events</a></li>
	 <li><a href="login.php">login</a></li>
	 <li><a href="inscription.php">Inscription</a></li>
	 <li><a href="contact.php">Contact</a></li>
</ul>
</div>
<section class="sec1"><img src="../img/coc.PNG">
	<br>
<br>
	<h2>SIN HOGER</h2>

	<p>"Help us by a simple act!"</p>
	
<p>Our products:</p>

</section>



 
<section class="sec2">  
<hr color="White">
		
<br>
<br><br>
	<!-- Traitement -->
<?php
							        
       
include("../Config/sinhogar.php");
$sql= "SELECT * FROM product";
$result2=mysqli_query($link,$sql);

while ($donnees=$result2->fetch_assoc())
{

$image=$donnees['image_product'];
$name=$donnees['name_product'];
$old=$donnees['old_price'];
$new=$donnees['new_price'];
$quantity=$donnees['quantity'];
$id_product=$donnees['id_product'];


	?>		
	

                                 <div class="single-product">
								 <div class="product-f-image">
                                    
                                    <img src="<?php echo $image ?>" alt=""  > 
  
                                </div>
                                
                                <h2 style="color:red;"> <?=$name;  ?></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>$<?=$new;  ?></ins> <del>$<?=$old;  ?></del> 
                                    <span> 	&nbsp;
									<a href="product3.php?id=<?php  echo $id_product ?>"> BUY IT </a></span><br>
								

			                                          
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