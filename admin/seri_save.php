<?php
require('conn.php');

$id_seri = $conn->real_escape_string($_POST['id_seri']);
$s_name = $conn->real_escape_string($_POST['s_name']);
$s_ic = $conn->real_escape_string($_POST['s_ic']);
$s_grade = $conn->real_escape_string($_POST['s_grade']);

$s_name = strtoupper($s_name);
$s_grade = strtoupper($s_grade);

echo $sql="INSERT INTO seri(s_name,s_ic,s_grade)
VALUES('$s_name','$s_ic','$s_grade')";

$conn->query($sql);

echo("ERROR DESCRIPTION:").$mysqli -> error;
header('location: useri.php');
?>

