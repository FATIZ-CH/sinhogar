

<?php 

$servername="localhost";
$user="root";
$dbname="projet";
$password="";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    

    
 $stmt = $conn->prepare("INSERT INTO message (mail_browser,lastName_browser,firstName_browser, contents) values(:mail_browser,:lastName_browser,:firstName_browser,:contents)");


$mail_browser = $_POST['mail_browser'];
$lastName_browser = $_POST['lastName_browser'];
$firstName_browser = $_POST['firstName_browser'];
$contents= $_POST['contents'];

 
	    $stmt->bindParam('mail_browser',$mail_browser);
	    $stmt->bindParam(':lastName_browser',$lastName_browser);
	    $stmt->bindParam(':firstName_browser',$firstName_browser);
	    $stmt->bindParam(':contents',$contents);
	    
	    

    
	$stmt->execute();
	header('location:../index.php');


  } catch(PDOException $e){

    echo "Ooops .. Something went wrong: " . $e->getMessage();

    die();

  }

  $conn = null;

?>
