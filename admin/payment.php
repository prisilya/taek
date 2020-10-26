<?php
require('conn.php');
if(!isset($_SESSION['admin'])) header('location: ../');
?>

<!DOCTYPE html>
<html>
<head>
	<title>SCHOOL LIST</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
	<div class="title">
			<h1>PAYMENT BY SCHOOL</h1>
		</div>
	<header>
		<div class="main">
			<div class="logo">
			<img src="bird.png"
			</div>
			<ul>
				<li ><a href="index.php">HOME</a></li>
				<li><a href="slist.php">SCHOOL LIST</a></li>
				<li><a href="update.php">UPDATE</a></li>
				<li class="active"><a href="payment.php">PAYMENT</a></li>
				<li><a href="../logout.php">LOGOUT</a></li>
				
			<center>
			<br><br>	

  <div class="row">
    <div class="col-sm-6">
      <p><b>SEKOLAH KEBANGSAAN SUNGAI DUA</b></p>
	  <p><button type="button"><a class="btn btn-success" href="payment_sgdua.php">PAYMENT</a></button></p>
    </div>
	
    <div class="col-sm-6" style="text-align:center;">
      <p><b>SEKOLAH KEBANGSAAN PENAGA</b></p>
	   <p><button type="button"><a class="btn btn-success" href="payment_penaga.php">PAYMENT</a></button></p>
    </div>
  </div>
	<div class="row">
    <div class="col-sm-6">
      <p><b> SEKOLAH KEBANGSAAN KEBUN SIREH</b></p>
	   <p><button type="button"><a class="btn btn-success" href="payment_kebun.php">PAYMENT</a></button></p>
    </div>
	
	<div class="col-sm-6">
      <p><b>SEKOLAH KEBANGSAAN SERI IMPIAN</b></p>
	   <p><button type="button"><a class="btn btn-success" href="payment_seri.php">PAYMENT</a></button></p>
    </div>
  </div>

			
		
	</header>
	
</body>
</html>