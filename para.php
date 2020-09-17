<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$ID = $_POST['id'];
$A = $_POST['attributes'];





//create connection

$conn = new mysqli($servername,$username,$password,$dbname);


//check connection

if($conn->connect_error)
{
	die("Connection Failed: " . $conn->connect_error);
}

//insert into table

$sql = "INSERT INTO parameter(id,attributes) VALUES ('$ID','$A')";

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
