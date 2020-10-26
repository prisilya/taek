<html>
<body>
<h1>Cheak the database connection</h1>
<?php


//create the connection
$connect=mysqli_connect('localhost','root',' “,'phoenix');

if($connect)
{
  echo 'Connect to the database<br />';
  
}
else{

echo 'Not connected';

}
// perform the select operation

$result=mysqli_query($connect,"SELECT first_name,surname_name FROM mydemo");

  while($row=mysqli_fetch_array($result))
  {
       
	   $result1=$row['first_name'].'  ' .$row['surname_name'].'<br />';
			echo $result1;
  
  }


?>
<br />
<h1> Thrown the error message if not connected</h1>
<?php
$connect=mysqli_connect('localhost','root',' ','user');

if(mysqli_connect_errno($connect)){
 echo 'Failed to connect to database';
}
     
	 
	 
?>

</body>
</html>