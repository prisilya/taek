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
			<h1>SEKOLAH KEBANGSAAN SERI IMPIAN</h1>
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
			<h3>Student Name List At SERI IMPIAN</h3><button onclick="goBack()" class="btn btn-warning">GO BACK</button>
		<center>
			<form method="post" name="result" action="useri.php">
				<table class="table table-hover">
                    <tr>
						<td>IC No.:</td>
                        <td><input class="form-control" placeholder="search" name="s_ic"
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
			if(isset($_POST['s_ic'])) {
				$s_ic = $_POST['s_ic'];
				$sql = "SELECT * FROM seri WHERE s_ic LIKE '$s_ic%'";
			} else {
				$sql = "SELECT * FROM seri";
					}
            
             $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row['s_name']; ?></td>
            <td><?php echo $row['s_ic']; ?></td>
            <td><?php echo $row['s_grade']; ?></td>
			
            <td><a href="scert.php?id_seri=<?php echo $row['id_seri']; ?>" onclick="return sahkan('view')">
            <img src="view.png" style="width: 30px" title="view"></a></td>
            
            <td><a href="seri_edit.php?id_seri=<?php echo $row['id_seri']; ?>" onclick="return sahkan('update')">
            <img src="edit.png" style="width: 30px" title="update"></a></td>
			
			<td><a href="seri_del.php?id_seri=<?php echo $row['id_seri']; ?>" onclick="return confirm('Are you sure you want to delete?')">
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