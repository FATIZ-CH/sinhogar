<?php  
session_start();

?>


<!DOCTYPE html>
<html>
<head>
<style>
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
#dd{


  font-family: "Comic Sans MS", cursive, sans-serif;

}
</style>
</head>
<body>

  <?php
 if( isset($_POST['selected']) && $_POST['selected']!='default' )
        {
 
                   $sel = filter_var( $_POST["selected"], FILTER_VALIDATE_INT);

        }?>
<?php
$name = $_POST["a"];

 ?>


<h2 id="dd"> You have chosen <?=$sel;  ?> of <?=$name;  ?>   </h2>

  <?php
$price=$_SESSION["new"];
$id_product=$_SESSION["id_product"];
$id_order=$_SESSION["id_order"];
$price1=$sel*$price;
$id_user=$_SESSION["id_user"];



include("../Config/sinhogar.php");

$up = "UPDATE orderproducts SET quantity_purchased = '$sel', price = '$price1' WHERE id_order = '$id_order' AND id_product = '$id_product' ";


$result1 = mysqli_query($link,$up);

if (!$result1) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}



?>
       <input type="submit" id="aa" value="ADD another product" onclick= "window.open('product4.php','_self');"> 
       <input type="submit" id="aa" value="Buy" onclick= "window.open('passercommande1.php?param1=<?php  echo $id_user ?>&param2=<?php  echo $id_order ?>','_self');"> 


</body>
</html>
