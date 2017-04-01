<?php 
  $servername = "localhost";
  $username = "root";
  $password = "andeladash";
  $dbname = "andelasdash_db";

  //Create Connection
  $con = mysqli_connect($servername, $username, $password, $dbname);

  //Check Connection
  if (!$con) {
    die("Connection failed: " . mysql_connect_error());
  }

?>