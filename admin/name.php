<?php
require('conn.php');
if(!isset($_SESSION['admin'])) header('location: ../');
?>
<!DOCTYPE html>    
<html>    
<head>    
    <title>ADMIN</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">    
    <link rel="stylesheet" type="text/css" href="css/style1.css">
	    <style>
			table, th, td {
			  padding: 30px;
			  border: 2px solid blue;
			  background-color: white;
			  margin-left:300px;
			}
		</style>
</head>
<body>
				<div class="title-section">
					<h1></h1>
					</div>
				</body>
			</ul>
		</div>
		<div class="title">
			<h1>CLASS SCHEDULE</h1>
		</div>
<header>
		<div class="main">
			<div class="logo">
			<img src="bird.png"
			</div>
			<ul>
				<li class="active"><a href="index.php">HOME</a></li>
				<li><a href="slist.php">SCHOOL LIST</a></li>
				<li><a href="update.php">UPDATE</a></li>
				<li><a href="payment.php">PAYMENT</a></li>
				<li><a href="../logout.php">LOGOUT</a></li>
<body>
	<div class="container">
  <div class="row"><center>
    <div class="col-sm-4">
     
      <p><b>Sg Dua Student</b></p>
	  <p></p>
    </div></center>
	
    <div class="col-sm-4" style="text-align:center;">
		<?php
	 $sql = "SELECT COUNT(*) AS bil FROM staff";
    $rowb = $conn->query($sql)->fetch_assoc();
     $nos = $rowb['bil'];
	 ?>		
      <p><b>TOTAL NUMBER OF STAFF</b></p>
	  <p><?php echo $nos; ?></p>
    </div>
	
	
    <div class="col-sm-4">
      <?php
	 $sql = "SELECT COUNT(*) AS bil FROM booking";
    $rowc = $conn->query($sql)->fetch_assoc();
     $nob = $rowc['bil'];
	 ?>	
      <p><b> BOOKING</b></p>
	  <p><?php echo $nob; ?></p>
    </div>
  </div>
</header>

</body>    
</html>