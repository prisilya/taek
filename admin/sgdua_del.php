<?php
include('conn.php');

$id_sgdua = $_GET['id_sgdua'];
$sql="SELECT * FROM sgdua WHERE id_sgdua = $id_sgdua";
$row = $conn->query($sql)->fetch_assoc();

$id_sgdua = $conn->real_escape_string($_GET['id_sgdua']);
$sql = "DELETE FROM sgdua WHERE id_sgdua= $id_sgdua";
$conn->query($sql);
header('location: usgdua.php');
?>
