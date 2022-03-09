<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db1";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
	
else{
		$s1 = $_POST['name'];
		$s2 = $_POST['email'];
		$s3 = $_POST['password'];
		$s4 = $_POST['re_password'];
$sql = "INSERT INTO register (Full_Name, Email, Password, Re_Password);
VALUES ('$s1', '$s2', '$s3','$s4')";

if ($conn->query($sql) === TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
</body>
</html>