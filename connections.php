<?php

$conn = mysql_connect("localhost", " root@localhost", " root@localhost", "thecompany");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>