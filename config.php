<?php 
  //local dev connection
  /*
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
  */

  //Heroku ClearDB connection

  $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

  $server = $url["host"];
  $username = $url["user"];
  $password = $url["pass"];
  $db = substr($url["path"], 1);

  $conn = new mysqli($server, $username, $password, $db);

  if (!$conn) {
    die("Connection Failed: " . mysqli_error());
  }
?>