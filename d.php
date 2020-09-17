<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$PH = $_POST['ph'];
$DO = $_POST['do'];
$BOD = $_POST['bod'];
$TDS = $_POST['tds'];
$HD = $_POST['hardness'];
$CL = $_POST['chloride'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM drinkingwater WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>