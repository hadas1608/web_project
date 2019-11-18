<?php
  $servername = "localhost";
  $username = "id6282262_ruby";
  $password = "Ruby!234";
  $dbname = "id6282262_jewels";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection error: $conn->connection_error");
  }
?>