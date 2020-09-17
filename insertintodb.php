<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$userr = $_POST['Username'];
$passcode = $_POST['Password'];




//create connection

$conn = new mysqli($servername,$username,$password,$dbname);


//check connection

if($conn->connect_error)
{
	die("Connection Failed: " . $conn->connect_error);
}

//insert into table
$sql = "INSERT INTO logintable(Username, Password) VALUES ('$userr','$passcode')";


if($conn->query($sql) === TRUE)
{
	$last_id = $conn->insert_id;
	echo '<script type="text/javascript"> alert(" SUCESSFULLY ENTERED.."); </script>';
}
else
{
	echo "Error:" . $sql . "<br>" . $conn->error;
}
header("refresh:2; url=agricultural.php"); // url for wherever you want to direct it ! after login 
?>
