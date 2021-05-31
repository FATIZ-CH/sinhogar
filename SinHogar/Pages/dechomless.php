


<?php 

$servername="localhost";
$user="root";
$dbname="projet";
$password="";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  


    
 $stmt = $conn->prepare("INSERT INTO homeless(name_homeless,last_name_homeless,location,situation,status,age_homeless,gender)
 values(:name_homeless,:last_name_homeless,:location,:situation,:status,:age_homeless,:gender)");

$name_homeless = $_POST['name_homeless'];
$last_name_homeless = $_POST['last_name_homeless'];
$location = $_POST['location'];
$situation = 'INVALIDE';
$status = 'INVALIDE';
$age_homeless= 'NULL';
$gender = $_POST['gender'];


 
	    $stmt->bindParam('name_homeless',$name_homeless);
	    $stmt->bindParam(':last_name_homeless',$last_name_homeless);
	    $stmt->bindParam(':situation',$situation);
	    $stmt->bindParam(':age_homeless',$age_homeless);
	    $stmt->bindParam(':status',$status);
	    $stmt->bindParam(':location',$location);
	    $stmt->bindParam(':situation',$situation);
	    $stmt->bindParam(':gender',$gender);
	    

    
	$stmt->execute();
	
  header('location:../index.php');

  } catch(PDOException $e){

    echo "Ooops .. Something went wrong: " . $e->getMessage();

    die();

  }

  $conn = null;

?>
