<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "M02";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "CREATE TABLE M2 ( num int, w1 char(1), w2 varchar(20), num1 float);";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

for($i=1;$i<=10000;$i++){
    $ran = chr(rand(0,26)+65);
    $ran2 = chr(rand(0,26)+65);
    $word = $ran."".$ran2;
    $sql2 = "INSERT INTO M2 (num, w1, w2, num1) VALUES ($i, '$word', '$word',$i)";
    if ($conn->query($sql2) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
$conn->close();