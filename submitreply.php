<?php
$servername = "localhost";
$username = "adminJKPBdZ5";
$password = "kzRMy7RkRzQm";
$dbname = "sschange";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (!$conn->set_charset("utf8")) {
      printf("Error loading character set utf8: %s\n", $conn->error);
  }

$stmt = $conn->prepare("INSERT INTO `message` (name,content) values (?,?)");
$stmt->bind_param("ss", $name , $content);
$name = $_POST['name'];
$content = $_POST['content'];
$stmt->execute();

class reply {
	public $success = false;
    public $name = "";
    public $content  = "";
    public $publishtime = "";
}
$reply = new reply;
$sql = "SELECT * FROM message where id='".mysqli_insert_id($conn)."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $reply->name = $row['name'];
        $reply->content = $row['content'];
        $reply->publishtime = $row['publishtime'];
    }
} else {
    echo "0 results";
}
$reply->success = true;
echo json_encode($reply);

$stmt->close();
$conn->close();
?>