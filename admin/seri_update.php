<?php
require('conn.php');

$id_seri = $conn->real_escape_string($_POST['id_seri']);
$s_name = $conn->real_escape_string($_POST['s_name']);
$s_ic = $conn->real_escape_string($_POST['s_ic']);
$s_grade = $conn->real_escape_string($_POST['s_grade']);

$s_name = strtoupper($s_name);
$s_grade= strtoupper($s_grade);


$sql="update seri SET s_ic='$s_ic',s_name='$s_name',s_grade='$s_grade' WHERE id_seri='$id_seri'";
$conn->query($sql);

header('location: useri.php');
?>