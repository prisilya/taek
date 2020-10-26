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
	<table>
	  <tr>
		<th>Day</th>
		<th>Time</th>
		<th>School</th>
	  </tr>
	  <tr>
		<td>Monday</td>
		<td>3.00PM-4.30PM</td>
		<td>SK SG DUA</td>
	  </tr>
	  <tr>
		<td>Thursday</td>
		<td>4.00PM-5.30PM</td>
		<td>SK PENAGA</td>
	  </tr>
	  <tr>
		<td>Friday</td>
		<td>3.00PM-4.30PM</td>
		<td>SK KEBUN SIREH</td>
	  </tr>
	  <tr>
		<td>Saturday</td>
		<td>7.30AM-9.00AM</td>
		<td>SK SERI IMPIAN</td>
	  </tr>
	   
	</table>
    
</div>
</header>

</body>    
</html>