<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>SIN HOGER</title>
  <meta name="description" content="admin">
  <meta name="author" content="F.CHAOUFI">
  <link rel="stylesheet" href="../CSS/cssli.css" >


  <style>



#aa{
  

  border:0;
  background: #071b29;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #071b29;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;

  background:#a52ecc;
}

  </style>
  </head>

<body>

<div class="navbar">

<ul>
	 <li><a href="../index.php">Home</a></li>
	 <li><a href="declarehomless.php">Declare Homless</a></li>
	 <li><a href="donation.php" >Donation</a></li>
	 <li><a href="product1.php" >Products</a></li>
	 <li><a href="Listevents.php" >Events</a></li>
	 <li><a href="login.php" class="active">login</a></li>
	 <li><a href="inscription.php">Inscription</a></li>
	 <li><a href="contact.php">Contact</a></li>
</ul>

</div>



<section class="sec2">
  <br>
<br>
<br>
<br>
<br>
<br>
<img position="center" src="../img/coc.PNG">

<form class="box" action="" method="post">
  <h1>Sign in</h1>
  <?php


        include('../Config/sinhogar.php');




     session_start();
      
      if(isset($_POST['submit'])){

$Username = $_POST['Username'];
$password = $_POST['password'];
      $sel = "SELECT  * FROM user WHERE Username='$Username' AND passWord='$password' ";
mysqli_error($link);

      $result1 = mysqli_query($link, $sel);

          $row1= mysqli_fetch_array($result1);
        
        if($row1['id_Admin']==1){
               $_SESSION['Username'] = $Username;
                   header("location:admin_dashboard.php");
        }
        else if($row1['profile']=="Adherent"){
               $_SESSION['Username'] = $Username;
                   header("location:ListAllevents.php");
        }
        else {
        
          header("location:../index.php");
         }
    
        
}
 

?>

       <div class="form-group">
                               
                                       <input type='text'class="form-control" name='Username' id='Username'  placeholder=" login" required >
                                    
                            </div>
                            <div class="form-group">
                                 
                                      <input type='password'class="form-control" name='password' id='password'  placeholder=" password" required>
                    
                            </div>
                               <div class="form-group">
                                <p><input type="submit"  name="submit" class="" value="login"></p>
                            </div>
                            
                            
                        </form>
                    </div>




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

