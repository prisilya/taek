<?php
require('conn.php');

$id_kebun = $conn->real_escape_string($_POST['id_kebun']);
$k_name = $conn->real_escape_string($_POST['k_name']);
$k_ic = $conn->real_escape_string($_POST['k_ic']);
$k_grade = $conn->real_escape_string($_POST['k_grade']);

$k_name = strtoupper($k_name);
$k_grade= strtoupper($k_grade);


$sql="update kebun SET k_ic='$k_ic',k_name='$k_name',k_grade='$k_grade' WHERE id_kebun='$id_kebun'";
$conn->query($sql);

header('location: ukebun.php');
?>