<?php
$conn = new mysqli('localhost','root', '', 'clinic');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>