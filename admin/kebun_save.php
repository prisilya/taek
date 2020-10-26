<?php
require('conn.php');

$id_kebun = $conn->real_escape_string($_POST['id_kebun']);
$k_name = $conn->real_escape_string($_POST['k_name']);
$k_ic = $conn->real_escape_string($_POST['k_ic']);
$k_grade = $conn->real_escape_string($_POST['k_grade']);

$k_name = strtoupper($k_name);
$k_grade = strtoupper($k_grade);

echo $sql="INSERT INTO kebun(k_name,k_ic,k_grade)
VALUES('$k_name','$k_ic','$k_grade')";

$conn->query($sql);

echo("ERROR DESCRIPTION:").$mysqli -> error;
header('location: ukebun.php');
?>

