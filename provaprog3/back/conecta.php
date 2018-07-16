<?php
  $db_host = "localhost";
  $db_login = "root";
  $db_password = "";
  $db_db = "prova";

  $conn = new mysqli($db_host, $db_login, $db_password, $db_db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 ?>
