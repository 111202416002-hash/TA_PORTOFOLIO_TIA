<?php
date_default_timezone_set('Asia/Jakarta');

$servername = "localhost";
$username = "root";
$password = "";
$db = "webdailyjournal";

//create conection
$conn = new mysqli($servername,$username,$password,$db);

//check connection
if($conn->connect_error){
    die("connection failed :" . $conn->connect_error);
}

?>

