<?php
include('conn.php');

$id_seri = $_GET['id_seri'];
$sql="SELECT * FROM seri WHERE id_seri = $id_seri";
$row = $conn->query($sql)->fetch_assoc();

$id_seri = $conn->real_escape_string($_GET['id_seri']);
$sql = "DELETE FROM seri WHERE id_seri= $id_seri";
$conn->query($sql);
header('location: useri.php');
?>
