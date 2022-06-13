<?php


$con = new mysqli("localhost","srbangb1_MLAdmin","Srbangbang01@","srbangb1_SucursalesML");
$con->set_charset("utf8");

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

?>