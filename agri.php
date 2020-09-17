<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$PH = $_POST['ph'];
$DO = $_POST['do'];
$FA = $_POST['freeamonia'];
$CD = $_POST['conductivity'];
$CO2 = $_POST['co2'];
$OG = $_POST['oilandgrease'];





//create connection

$conn = new mysqli($servername,$username,$password,$dbname);


//check connection

if($conn->connect_error)
{
	die("Connection Failed: " . $conn->connect_error);
}

//insert into table

$sql = "INSERT INTO agriculturalwater(ph,do,freeamonia,conductivity,co2,oilandgrease) VALUES ('$PH','$DO','$FA','$CD','$CO2','$OG')";

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
