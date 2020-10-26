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
			<h1>SEKOLAH KEBANGSAAN SG DUA</h1>
		</div>
	<header>
		<div class="main">
			<div class="logo">
			<img src="bird.png"
			</div>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="slist.php">SCHOOL LIST</a></li>
				<li class="active"><a href="update.php">UPDATE</a></li>
				<li><a href="payment.php">PAYMENT</a></li>
				<li><a href="../logout.php">LOGOUT</a></li>
				<hr>
			<h3>Student Name List At SG DUA</h3><button onclick="goBack()" class="btn btn-warning">GO BACK</button>
		<center>
			<form method="post" name="result" action="usgdua.php">
				<table class="table table-hover">
                    <tr>
						<td>IC No.:</td>
                        <td><input class="form-control" placeholder="search" name="ic_sgdua"
						type="text" value="" required=""  /></td>
                        <td><button class="btn btn-primary" type="submit">search</a></button></td>
                    </tr>
                </table>
			<table style="width:100%">
				<thead>
                    <tr>
                    <th>bil.</th>
                    <th>STUDENT NAME</th>
					<th>IC NUMBER</th>
					<th>GRADE</th>
                    </tr>
                 </thead>
		 <tbody>
		<?php
		 $bil=1;
			if(isset($_POST['ic_sgdua'])) {
				$ic_sgdua = $_POST['ic_sgdua'];
				$sql = "SELECT * FROM sgdua WHERE ic_sgdua LIKE '$ic_sgdua%'";
			} else {
				$sql = "SELECT * FROM sgdua";
					}
            
             $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row['n_sgdua']; ?></td>
            <td><?php echo $row['ic_sgdua']; ?></td>
            <td><?php echo $row['grade_sgdua']; ?></td>
			
            <td><a href="cert.php?id_sgdua=<?php echo $row['id_sgdua']; ?>" onclick="return sahkan('view')">
            <img src="view.png" style="width: 30px" title="view"></a></td>
            
            <td><a href="sgdua_edit.php?id_sgdua=<?php echo $row['id_sgdua']; ?>" onclick="return sahkan('update')">
            <img src="edit.png" style="width: 30px" title="update"></a></td>
			
			<td><a href="sgdua_del.php?id_sgdua=<?php echo $row['id_sgdua']; ?>" onclick="return confirm('Are you sure you want to delete?')">
            <img src="del.png" style="width: 25px" title="Delete"></a></td>
			
            
        </tr>
        <?php }?>
		</tbody>
			</table>
			
			</center>
	</header>
	
</body>
<style>
table, th, td {
  padding: 10px;
}
table {
  border-spacing: 15px;
}
</style>
<script>
function goBack() {
  window.history.back();
}
</script>
</html>