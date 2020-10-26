<?php

// Create connection

$connect=mysqli_connect("localhost","root","","phoenix");



// Check connection

if (mysqli_connect_errno($connect)) {
	
	echo "Failed to connect to database: " . mysqli_connect_error();

}



mysqli_query($connect,"INSERT INTO user (username,password)
VALUES ('rahul','123');");


$result = mysqli_query($connect, "SELECT * FROM user");

?>
<h1 bgcolor="red"> THIS IS THE LOGIN PAGE </h1>
<table width="500" cellpadding=5 cellspacing=5 border=1>
	
<tr>
		
	<th>ID#</th>
		
	<th>username</th>
		
	<th>password</th>
	
</tr>
	
<?php while($row = mysqli_fetch_array($result)) :?>


	<tr>
			
	<td><?php echo $row['id']; ?></td>
			
	<td><?php echo $row['username']; ?></td>
			
	<td><?php echo $row['password']; ?></td>
			
		
</tr>
	
<?php endwhile; ?>

</table>