<?php
require('conn.php');
$id_p = $_GET['id_p'];
$sql="SELECT * FROM penaga WHERE id_p = $id_p";
$row = $conn->query($sql)->fetch_assoc();
?>
<!DOCTYPE html>    
<html>    
<head>    
  <title>ADMIN</title>
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
			<h1>SEKOLAH KEBANGSAAN PENAGA </h1>
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
			<h3>EDIT Student At PENAGA</h3><button onclick="goBack()" class="btn btn-warning">GO BACK</button>
			 <center>
            <form method="post" name="result" action="p_update.php">
				<input name="id_p" type="hidden" value="<?php echo $row['id_p']; ?>">
				
				<table style="width:100%">
					<tr>
					<td>STUDENT NAME</td>
					<td><input class=" form-control" name="p_name" type="text" maxlength="50"
					value="<?php echo $row['p_name']; ?>" required=""></td>
				</tr>
				<tr>
					<td>IC NUMBER</td>
					<td><input class=" form-control" name="p_ic" type="text" maxlength="50"
					value="<?php echo $row['p_ic']; ?>" required=""></td>
				</tr>
				<tr>
					<td>GRADE</td>
					<td><input class=" form-control" name="p_grade" type="text" maxlength="50"
					value="<?php echo $row['p_grade']; ?>" required=""></td>
				</tr>
				</table>
				<div class="form-group">
                <div class="col-lg-offset-3 col-lg-6">
                    <button class="btn btn-success" type="submit" >Save</button>
                    <button class="btn btn-danger" type="reset">Cancel</button>
			</div>
			</center>

	
</header>

</body>
<script>
function goBack() {
  window.history.back();
}
</script>
</html>