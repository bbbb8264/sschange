<?php
$servername = "localhost";
$username = "adminJKPBdZ5";
$password = "kzRMy7RkRzQm";
$dbname = "sschange";
header("Content-Type:text/html; charset=utf-8");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$stmt = $conn->prepare("INSERT INTO `member` (name,skill,wanttolearn) values (?,?,?)");
$stmt->bind_param("sss", $name , $skill , $wanttolearn);
$name = $_POST['name'];
$skill = $_POST['skill'];
$wanttolearn = $_POST['wanttolearn'];
$stmt->execute();

echo "success";

$stmt->close();
$conn->close();
?>