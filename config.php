<?php

$servername = "localhost";
$database 	= "db_apotek";
$username 	= "root";
$password 	= "";

$servername = "sql210.epizy.com";

$database 	= "epiz_26390060_db_apotek";

$username 	= "epiz_26390060";

$password 	= "Rv7SQm9m3H";



$connect 	= new mysqli($servername,$username,$password,$database);



if (!$connect) {

    die("Connection failed: " . mysqli_connect_error());

}



?>

