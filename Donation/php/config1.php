<?php
$servername = "localhost";
$username ="root";
$password ="";
$db_name ="donation";
$conn = new mysqli( $servername, $username, $password, $db_name, 3307) ;
if($conn->connect_error){
 die("couldn't connect");
}

?>