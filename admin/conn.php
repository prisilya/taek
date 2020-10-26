<?php
$conn = new mysqli('localhost', 'root', '', 'taek');
session_start();
date_default_timezone_set('Asia/Kuala_Lumpur');

function tarikh($tarikh){
    list($a, $b, $c) = explode('-', $tarikh);
    return "$c-$b-$a";
}
?>