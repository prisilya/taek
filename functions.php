<?php
$servername= "localhost";
$username = "root";
$password="";
$dbname ="login";


$func = mysqli_connect($servername,$username, $password, $dbname);

if(!$func) {
 die("Connection failed: " . mysqli_connect_error());
 }
 
 ?>