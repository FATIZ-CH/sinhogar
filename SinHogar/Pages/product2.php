<?php 
session_start();
  ?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
<style>
	body {font-family: Arial, Helvetica, sans-serif;}



#aa{
  background-color: red;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border: 2px solid red;
  border-radius: 4px;
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
$id_product = $_GET["id"];
	

if (isset($id_product)) {
   

include("../Config/sinhogar.php");

$sql= "SELECT * FROM product WHERE id_product='$id_product'";

$result2=mysqli_query($link,$sql);



while ($donnees=mysqli_fetch_array($result2)){
$image=$donnees['image_product'];
$name=$donnees['name_product'];
$old=$donnees['old_price'];
$new=$donnees['new_price'];
$quantity=$donnees['quantity'];
$id_product=$donnees['id_product'];

		
// Set session variables
$_SESSION["id_product"] = $id_product;
$_SESSION["new"] = $new;
$_SESSION["image"] = $image;




?>	
                                 <div class="single-product">
								 <div class="product-f-image">
                                    
                                    <img src="<?php echo $image ?>" alt=""  > 
  
                                </div>
  <form action="pop.php" method="post" >
                             <br>
                                 <input id="aa" type="text" name="a" value="<?=$name; ?>" style="text-align:center;" readonly="readonly" >
                                 <br>
                                 <br>
                                <div class="product-carousel-price">
                                    <ins>$<?=$new;  ?></ins> <del>$<?=$old;  ?></del> 
                                    <span> 	&nbsp;
									
									<span>Quantity:	&nbsp;</span><select id="quantity" name="selected" >
                                               
												                      <option value="1">1</option>
			                                       <option value="2">2</option>
			                                       <option value="3">3</option>
			                                       <option value="4">4</option>
			                                       <option value="5">5</option>
			                                       <option value="6">6</option>
			                                       <option value="7">7</option>
			                                       <option value="8">8</option>
			                                       <option value="9">9</option>
			                                       <option value="10">10</option>
			                                          </select>
                                                <br>
                                               <br>

                                                <br>
                                                <br>
                                                <br>

                                            <input id="aa" type="submit" id="my" value="Add to cart">

</form>


			                                          
                            </div>
                    
							<br>
							<br>				
					
<?php };?>	

<?php };?>	



<?php




$insert = "INSERT INTO `user` (`profile`) VALUES ('acheteur')";
$result1 = mysqli_query($link,$insert);

    
$sql ="SELECT id_user FROM user ORDER BY id_user DESC LIMIT 1";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_array($result);
$value = $row[0];
 
$insert = "INSERT INTO `ordernum` (`id_user`) VALUES ('$value')";
$result1 = mysqli_query($link,$insert);

$sql1 ="SELECT id_order FROM ordernum ORDER BY id_order DESC LIMIT 1";
$result1 = mysqli_query($link,$sql1);
$row = mysqli_fetch_array($result1);
$value1 = $row[0];
if (!$result1) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}

$inser = "INSERT INTO orderproducts (id_product, id_order) VALUES ($id_product, $value1)";
$result1 = mysqli_query($link,$inser);


$_SESSION["id_order"] = $value1;
$_SESSION["id_user"] = $value;
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