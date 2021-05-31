<?php

$servername="localhost";
$username="root";
$dbname="projet";
$password="";
$link= mysqli_connect($servername,$username,$password,$dbname);
if(!$link){
	echo "Database Connect erreur".mysqli_error($link);
}
  
	?>