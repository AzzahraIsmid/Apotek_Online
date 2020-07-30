<?php

$servername 	= "sql210.epizy.com";

$database 	= "epiz_26390060_db_apotek";

$username 	= "epiz_26390060";

$password 	= "Rv7SQm9m3H";

	$connect 	= new mysqli($servername, $database, $username, $password);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT username,password FROM user";
$result = $connection ->query($sql);
$json = [];
$i = 1;
if (result -> num_rows > 0) {
	while($row = $result->fetch_assoc()) {
	$json[$i] = [
	'username' => $row["username"],
	'password' => $row["password"]
	];
	$i = $i + 1;
}
}else{
	echo "0 result";
}
$connection->close();
$data = 'data' => $json];
header(' Content-Type: application/json');
echo json_endcode($data);

?>
