<!DOCTYPE HTML>
<html>

<head>
  <title>Sin Hogar</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="../CSS/admin_dashboard.css" />
<style>
  
#dd{


  font-family: "Comic Sans MS", cursive, sans-serif;
  color: red;

}


</style>


</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <img src="../img/coc.PNG" >
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="loginout.php.html">Login out _ Home</a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <br>
                    <br>

          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="admin_dashboard.php">Dashboard</a></li>
          <li><a href="admin_accounts.php">accounts</a></li>
          <li><a href="admin_event.php">Events</a></li>
          <li><a href="admin_bd_homeless.php">Homelessnesses</a></li>
          <li><a href="admin_purchases.php">Purchases</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
        <?php
 include('../Config/sinhogar.php');

     
        $i=0;
     $count= "SELECT * FROM user WHERE profile = 'donateur'";
       $result1 = mysqli_query($link, $count);
if (!$result1) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}
while ($donnees=$result1->fetch_assoc())
{
$i=$i+1;


 }
       $j=0;
     $count= "SELECT * FROM ordernum";
       $result1 = mysqli_query($link, $count);
if (!$result1) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}
while ($donnees=$result1->fetch_assoc())
{
$total_price=$donnees['total_price'];

$j=$j+$total_price;


 }


?>
<div style="text-align:center">  </div>
    <table class="table table-striped table-bordered" id="cmptable" style="border:1px solid black;margin-left:auto;margin-right:auto;">
      <br><br>
    <thead>
    <tr style="color:#000000">
          <th style="color:#000000">Id</th>

          <th style="color:#000000">Name product</th>
          <th style="color:#000000">Quantity</th>
           <th style="color:#000000">Price</th>

          <th  style= "width :  220px ">  </th>
        </tr>
  </thead>

<h2 id="dd"> The number of donations is <?=$i;  ?>   </h2>
<h2 id="dd"> Sales revenue = <?=$j;  ?>.00 $   </h2>
      <div class="sidebar">

      </div>
      <div id="content">
        <h1></h1>
     
      


      <?php 
  
    
    $select_compte="SELECT * FROM product";
    $result = mysqli_query($link,$select_compte);
    $h = 0;
    while($row = mysqli_fetch_assoc($result)) {
      $i++;
      $id=$row['id_product'];
      $name_product=$row['name_product'];
      $quantity=$row['quantity'];
      $new_price=$row['new_price'];

    ?>                      
       <tr>
       <td><?php echo $h ;?></td>
         <td> <?php echo $name_product ;?></td>
         <td> <?php echo $quantity ;?></td>
        <td> <?php echo $new_price ;?></td>

       <td><button type="button"  class="btn btn-default btn-xs view_data " id="<?php echo $id;?>" >Update </button>    &nbsp;

           <button type="button" class="btn btn-primary  btn-xs edit_data" id="<?php echo $id;?>" >Delete</button>   
       </td>
       </tr>
     <?php } ?>
   </tbody>
   </div>

</table>
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit"  value="Add product" onclick= "window.open('add_product.php','_self');"> 
    
</body>

</html>


  