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
	<style>
	table, th, td {
		border: 1px ;
		border-collapse: collapse;
	}
	th, td {
		padding: 10px;
	}
	</style>
</head>
<body>
	<div class="title">
			<h1>SEKOLAH KEBANGSAAN SUNGAI DUA</h1>
		</div>
	<header>
		<div class="main">
			<div class="logo">
			<img src="bird.png"
			</div>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li class="active"><a href="slist.php">SCHOOL LIST</a></li>
				<li><a href="update.php">UPDATE</a></li>
				<li><a href="payment.php">PAYMENT</a></li>
				<li><a href="../logout.php">LOGOUT</a></li>
				<hr>
			<h3>Add New Student At SG DUA</h3><button onclick="goBack()" class="btn btn-warning">GO BACK</button>
			<center>
				<form method="post" action="sgdua_save.php">
				<input name="id_sgdua" type="hidden">
			<table style="width:100%">
				
				<tr>
					<td>STUDENT NAME</td>
					<td><input class=" form-control" name="n_sgdua" type="text" placeholder="Student Name" maxlength="50" required=""></td>
				</tr>
				
				<tr>
					<td>IC NUMBER</td>
					<td><input class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57;"
               name="ic_sgdua" type="text" maxlength="12" placeholder="Enter IC Number without '-' symbol" required=""></td>
				</tr>
				
				<tr>
					<td>GRADE</td>
					<td>
						<lable><input type="radio" name="grade_sgdua" value="White">White</lable>
						<lable><input type="radio" name="grade_sgdua" value="White yellow bar"> White yellow bar</lable>
						<lable><input type="radio" name="grade_sgdua" value="Yellow">Yellow</lable>
						<br>
						<lable><input type="radio" name="grade_sgdua" value="Yellow green bar">Yellow green bar</lable>
						<lable><input type="radio" name="grade_sgdua" value="Green"> Green</lable>
						<lable><input type="radio" name="grade_sgdua" value="Green blue bar">Green blue bar</lable>
						<br>
						<lable><input type="radio" name="grade_sgdua" value="Blue">Blue</lable>
						<lable><input type="radio" name="grade_sgdua" value="Blue red bar">Blue red bar</lable>
						<lable><input type="radio" name="grade_sgdua" value="Red">Red</lable>
						<br>
						<lable><input type="radio" name="grade_sgdua" value="Red black bar">Red black bar</lable>
						<lable><input type="radio" name="grade_sgdua" value="Black">Black</lable>
					</td>
				</tr>
			</table>
			<div class="form-group">
                <div class="col-lg-offset-3 col-lg-6">
                    <button class="btn btn-success" type="submit" >Save</button>
                    <button class="btn btn-danger" type="reset">Cancel</button>
			</div>
			</center>

			
</body>
<script>
	$(function(){
    $('input[name=ic_sgdua]').focus();
    
    $('form').submit(function(){
        if($('input[name=ic_sgdua]').val().length != 12){
            alert('Please insert full IC Number !!');
            $('input[name=ic_sgdua]').focus();
            return false;
        }else if(!$.isNumeric($('input[name=ic_sgdua]').val())){
            alert('Please field STUDENT IC correctly.');
            $('input[name=ic_sgdua]').focus();
            return false;
		});
	});
</script>
<script>
function goBack() {
  window.history.back();
}
</script>
</html>
