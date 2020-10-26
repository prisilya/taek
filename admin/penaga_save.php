<?php
require('conn.php');

$id_p = $conn->real_escape_string($_POST['id_p']);
$p_name = $conn->real_escape_string($_POST['p_name']);
$p_ic = $conn->real_escape_string($_POST['p_ic']);
$p_grade = $conn->real_escape_string($_POST['p_grade']);

$p_name = strtoupper($p_name);
$p_grade = strtoupper($p_grade);


echo $sql="INSERT INTO penaga(p_name,p_ic,p_grade)
VALUES('$p_name','$p_ic','$p_grade')";


$conn->query($sql);

echo("ERROR DESCRIPTION:").$mysqli -> error;
header('location: upenaga.php');
?>

