<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$PH = $_POST['ph'];
$CD = $_POST['conductivity'];
$SAR = $_POST['sar'];
$B = $_POST['boron'];
$TDS = $_POST['tds'];
$SL = $_POST['sulphate'];
$CL = $_POST['chloride'];






//create connection

$conn = new mysqli($servername,$username,$password,$dbname);


//check connection

if($conn->connect_error)
{
	die("Connection Failed: " . $conn->connect_error);
}

//insert into table

$sql = "INSERT INTO industrialwter(ph,conductivity,sar,boron,tds,sulphate,chloride) VALUES ('$PH','$CD','$SAR','$B','$TDS','$SL','$CL')";

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
