<?php
include('conn.php');

$id_kebun = $_GET['id_kebun'];
$sql="SELECT * FROM kebun WHERE id_kebun = $id_kebun";
$row = $conn->query($sql)->fetch_assoc();

$id_kebun = $conn->real_escape_string($_GET['id_kebun']);
$sql = "DELETE FROM kebun WHERE id_kebun= $id_kebun";
$conn->query($sql);
header('location: ukebun.php');
?>
