<?php
require('conn.php');

$id_p = $conn->real_escape_string($_POST['id_p']);
$p_name = $conn->real_escape_string($_POST['p_name']);
$p_ic = $conn->real_escape_string($_POST['p_ic']);
$p_grade = $conn->real_escape_string($_POST['p_grade']);

$p_name = strtoupper($p_name);
$p_grade= strtoupper($p_grade);


$sql="update penaga SET p_ic='$p_ic',p_name='$p_name',p_grade='$p_grade' WHERE id_p='$id_p'";
$conn->query($sql);

header('location: upenaga.php');
?>