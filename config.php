<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "andeladash_db";

  //Create Connection
  $con = mysqli_connect($servername, $username, $password, $dbname);

  //Test Connecton
  if (!$con) {
    die("Connection Failed: " . mysqli_error());
  }
?>