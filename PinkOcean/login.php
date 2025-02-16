<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "ARUN@2004";
$dbname = responsive form;

$conn = mysqli_connect($servername, $username, $password,$dbname);
if ($conn) {
    echo "connection ok";
} 
else {
    echo "connection failed".mysql_connection_error();
}
?>
