<?php 
include_once('config.php');

$username = $_POST["username"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$country = $_POST["country"];
$city = $_POST["city"];

$admin_sql = "INSERT INTO admin (Username, First_Name, Last_Name, Email, Country, City) VALUES ( '".$username."', '".$first_name."', '".$last_name."', '".$email."', '".$country."', '".$city."')";

mysqli_query($con,$admin_sql);
header("Location: admin.php?")
?>