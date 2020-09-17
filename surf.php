<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$PH = $_POST['ph'];
$DO = $_POST['do'];
$BOD = $_POST['bod'];
$TC = $_POST['totalcoliform'];
$FL = $_POST['flouride'];





//create connection

$conn = new mysqli($servername,$username,$password,$dbname);


//check connection

if($conn->connect_error)
{
	die("Connection Failed: " . $conn->connect_error);
}

//insert into table

$sql = "INSERT INTO surfacewater(ph,do,bod,totalcoliform,flouride) VALUES ('$PH','$DO','$BOD','$TC','$FL')";

if($conn->query($sql) === TRUE)
{
	$last_id = $conn->insert_id;
	echo '<script type="text/javascript"> alert(" SUCESSFULLY ENTERED.."); </script>';
}
else
{
	echo "Error:" . $sql . "<br>" . $conn->error;
}
 // url for wherever you want to direct it ! after login 
?>
