<?php
require('conn.php');

$ic=$_POST['ic'];
$psw=$_POST['psw'];


    $sql="SELECT * FROM admin";
    $row=$conn->query($sql)->fetch_assoc();
    if ($psw==$row['psw']) {
        $_SESSION['admin']='admin';
        header('location: admin/');
    } else {
        ?>
        <script>
            alert('Incorrect Password');
            window.location='login.php';
        </script>
        <?php
    }
 
?>