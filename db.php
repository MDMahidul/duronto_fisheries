<?php

$conn = mysqli_connect('localhost','root','','duronto_fisheries');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>