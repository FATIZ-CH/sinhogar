<?php 
session_start();
  ?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
<style>
	body {font-family: Arial, Helvetica, sans-serif;}
#aa {
    font-size: 18px;
    line-height: 25px;
    margin-bottom: 10px;
    margin-top: 15px;
    color: red;
}

 #cc {
font-size : 20px;
color : white;
font-family : cursive;
background : black;
border-width : 2px;
border-color : red;
border-style : ridge;
text-align : center;
width : 600px;
margin-left:auto;
margin-right:auto;
}


</style>
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
	 <li><a href="product1.php" >Products</a></li>
	 <li><a href="" class="active">Events</a></li>
	 <li><a href="login.php">login</a></li>
	 <li><a href="inscription.php">Inscription</a></li>
	 <li><a href="contact.php">Contact</a></li>
</ul>
</div>
<section class="sec1"><img src="../img/coc.PNG">
	<br>
<br>
	<h2>SIN HOGER</h2>

	
</section>



 
<section class="sec2">  
<hr color="White">
		
<br>
<br><br>
	<!-- Traitement -->
<?php
$id_event = $_GET["name"];
	

if (isset($id_event)) {


include("../Config/sinhogar.php");

$sql= "SELECT * FROM event WHERE id_event='$id_event'";

$result2=mysqli_query($link,$sql);



while ($donnees=mysqli_fetch_array($result2)){

 
$image=$donnees['image'];
$title=$donnees['title'];
$informations=$donnees['short_info'];
$long_information=$donnees['long_info'];
$id_event=$donnees['id_event'];
$date=$donnees['date_event'];


?>	

                                 <div>
                                    
                                    <img src="<?php echo $image ?>" alt="" height="300" width="300" > 
  

                                </div>
                                 <h2 id="aa" href="event.php?name=<?php  echo $id_event ?>"><?=$title;  ?></h2>
                                <span><?=$date;  ?></span>
							<br>
                             <br>
                                 <br>
                                 <br>
                              <div id="cc"><?=$informations;  ?><?=$long_information;  ?>

                               </div>
                                 
					


			                                          
                            </div>
                   		
					
<?php };?>	

<?php };?>	






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