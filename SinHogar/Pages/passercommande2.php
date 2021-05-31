<?php 

session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>SIN HOGER</title>
  <meta name="description" content="admin">


  <style>
table {
 border-collapse:collapse;
 width:90%;
 }
th, td {
 border:1px solid black;
 width:20%;
 }
td {
 text-align:center;
 }

 
  #aa{
  background-color: red;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border: 2px solid red;
  border-radius: 4px;
} </style>
</head>

<body>
<?php
$id_user=$_SESSION["id_user"];
$id_order=$_SESSION["id_order"];
$total_price=0;

echo "$id_user";
echo "$id_order";
include("../Config/sinhogar.php");

$date_order = date("Y/m/d") ;
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$phone_number = $_POST['phone_number'];
$mail = $_POST['gmail'];
$country = $_POST['country'];
$city = $_POST['city'];
$cin = "NULL";
$bin = "NULL";

?>

<br>
<?php
if($gender=='male'){

	echo "Hello Mr $last_name $first_name, please find here under the list of products you have chosen and the total price.";
}
else if($gender=='female'){

echo "Hello Mrs $last_name $first_name, please find here under the list of products you have chosen and the total price."; 

}

$up = "UPDATE user SET name = '$first_name', last_name = '$last_name', gender = '$gender', phone_number = '$phone_number', mail = '$mail', country = '$country', city = '$city' WHERE id_user = '$id_user' ";


$result1 = mysqli_query($link,$up);

if (!$result1) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}

if(mysqli_query($link, $up)){
               echo "<p align='center'><span class='text-success'><b></b></span></p>" ;}
 else{            echo "<p align='center'><span class='text-success'><b>user already exist</b></span></p>";}

?>

<table>


<br><br><thead>
    <tr style="color:#000000">
    	   <th style="color:#000000">Product</th>
          <th style="color:#000000">name</th>
          <th style="color:#000000">quantity</th>
          <th style="color:#000000">price</th>
        </tr>
  </thead>
 <tbody>
 	<?php 
$sel="SELECT * from orderproducts WHERE id_order='$id_order'";
$result1 = mysqli_query($link,$sel);
if (!$result1) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}
 $i = 0;
while ($donnees=$result1->fetch_assoc())
{
	$i++;
$product=$donnees['id_product'];
$price=$donnees['price'];
$quantity=$donnees['quantity_purchased'];

?>

 <tr>
       <td><?php echo $i ;?></td>
       <?php
$sel1="SELECT * from product WHERE id_product = '$product'";
$result2 = mysqli_query($link,$sel1);
if (!$result2) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}
while ($donnees=$result2->fetch_assoc())
{

$name=$donnees['name_product'];

?>
 <td>	<?php echo $name ;?></td> 
  <td>	<?php echo $quantity ;?></td> 
  <td><?php echo $price ;?></td> 

<?php }

$total_price=$total_price+$price;}
	
$up="UPDATE ordernum SET date_order = '$date_order', total_price = '$total_price' WHERE id_order = '$id_order'";
$result1 = mysqli_query($link,$up);

if (!$result1) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}
?>
  </tr>
   
   </tbody>
</table>
<br>
<table>
  <th style="color:#000000">Date</th>
<td><?php echo $date_order ;?></td> 
</table>



<table>

          <th style="color:#000000">total price</th>
<td><?php echo $total_price ;?>.00$</td> 
</table>
<br>
<br>
<br>

  


<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
<script>paypal.Buttons().render('body');</script>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

       <input type="submit" id="aa" value="Retun to home page" onclick= "window.open('../index.php','_self');"> 

</body>
