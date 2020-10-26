<?php
include('conn.php');

$id_p = $_GET['id_p'];
$sql="SELECT * FROM penaga WHERE id_p = $id_p";
$row = $conn->query($sql)->fetch_assoc();

$id_p = $conn->real_escape_string($_GET['id_p']);
$sql = "DELETE FROM penaga WHERE id_p= $id_p";
$conn->query($sql);
header('location: upenaga.php');
?>
