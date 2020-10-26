<?php
require('conn.php');
$id_seri = $_GET['id_seri'];
$sql="SELECT * FROM seri WHERE id_seri = $id_seri";
$row = $conn->query($sql)->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<head><title>CERTIFICATE</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	</head>
	<body style="margin: 10px auto; text-align: center;">
	 
      <div style="margin: 5px auto 5px auto; text-align: center; font-family: Georgia, Times New Roman, serif; width: 860px; height: 800px; position: relative;">
	  <div style="position: absolute; top: 10px; left: 0;"><image src="bg3.gif" /></div>
	  <div style="padding: 50px 80px 50px 100px;">
		<div class="logo"><image class="aligncenter size-full wp-image-33" alt="wtf2" src="wtf2.jpg"/></div>
		<h1 style="font-size: 40px;"><span style="color:#000000;">GUP CERTIFICATE</span></h1>
		<p style="font-size: 30px;">
			This is to certify that <?php echo $row['s_name']; ?> has attained the <?php echo $row['s_grade']; ?>
			in the requisite examination conducted by Taekwondo Malaysia (WTF) on<br>
			<?php echo date("d-m-Y") ;?>
			</p>
		<br><br><br>
		<p style="font-size: 25px;"> MASTER KASIRUL KASINATHAN B ABDULLAH</P>
		<p><image alt="world2" src="world2.jpg"  /></p>
		<div style="margin: 0px auto 0px auto; width: 500px; height: 800px; position: relative;">  </div>
		<button onclick="goBack()">GO BACK</button>
		<button onclick="window.print();return false;">Print this page</button>
		
    </div>
	  <script>
function goBack() {
  window.history.back();
}
</script>
  </body>
	
</html>