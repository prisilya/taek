<?php
require('conn.php');

$id_sgdua = $conn->real_escape_string($_POST['id_sgdua']);
$n_sgdua = $conn->real_escape_string($_POST['n_sgdua']);
$ic_sgdua = $conn->real_escape_string($_POST['ic_sgdua']);
$grade_sgdua = $conn->real_escape_string($_POST['grade_sgdua']);

$n_sgdua = strtoupper($n_sgdua);
$grade_sgdua = strtoupper($grade_sgdua);


echo $sql="INSERT INTO sgdua(n_sgdua,ic_sgdua,grade_sgdua)
VALUES('$n_sgdua','$ic_sgdua','$grade_sgdua')";


$conn->query($sql);

echo("ERROR DESCRIPTION:").$mysqli -> error;
header('location: usgdua.php');
?>

