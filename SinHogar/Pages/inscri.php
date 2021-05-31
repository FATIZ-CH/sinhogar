
<?php 

$servername="localhost";
$user="root";
$dbname="projet";
$password="";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    

    
 $stmt = $conn->prepare("INSERT INTO user (name, last_name, gender, Username, passWord, date_birth, profile, phone_number, mail, cin, country, city) values(:first_name,:last_name,:gender,:Username,:password,:date_birth,:profile,:phone_number,:mail,:cin,:contry,:city)");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$Username = $_POST['Username'];
$password = $_POST['password'];
$date_birth = $_POST['date_birth'];
$profile = 'Adherent';
$phone_number = $_POST['phone_number'];
$mail = $_POST['gmail'];
$cin = $_POST['cin'];
$contry = $_POST['contry'];
$city = $_POST['city'];
 
	    $stmt->bindParam(':first_name',$first_name);
	    $stmt->bindParam(':last_name',$last_name);
	    $stmt->bindParam(':gender',$gender);
	    $stmt->bindParam(':Username',$Username);
	    $stmt->bindParam(':password',$password);
	    $stmt->bindParam(':date_birth',$date_birth);
	    $stmt->bindParam(':profile',$profile);
	    $stmt->bindParam(':phone_number',$phone_number);
	    $stmt->bindParam(':mail',$mail);
	    $stmt->bindParam(':cin',$cin);
	    $stmt->bindParam(':contry',$contry);
	    $stmt->bindParam(':city',$city);
	    

    
	$stmt->execute();
  header('location:login.php');

  } catch(PDOException $e){

    echo "Ooops .. Something went wrong: " . $e->getMessage();

    die();

  }

  $conn = null;

?>

  

