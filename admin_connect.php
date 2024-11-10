<?php
  $dbHost = "localhost";
  $dbuser = "root";   ///server
  $dbpass = "";
  $dbName = "csm";

  $conn = mysqli_connect($dbHost,$dbuser,$dbpass,$dbName);
  if (!$conn){
    die("Something went wrong . Database is not connected;");
  }
?>