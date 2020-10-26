<?php
require('conn.php');

$id_sgdua = $conn->real_escape_string($_POST['id_sgdua']);
$n_sgdua = $conn->real_escape_string($_POST['n_sgdua']);
$ic_sgdua = $conn->real_escape_string($_POST['ic_sgdua']);
$grade_sgdua = $conn->real_escape_string($_POST['grade_sgdua']);

$n_sgdua = strtoupper($n_sgdua);
$grade_sgdua= strtoupper($grade_sgdua);


$sql="update sgdua SET ic_sgdua='$ic_sgdua',n_sgdua='$n_sgdua',grade_sgdua='$grade_sgdua' WHERE id_sgdua='$id_sgdua'";
$conn->query($sql);

header('location: usgdua.php');
?>