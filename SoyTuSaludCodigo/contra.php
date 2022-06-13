<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php

$caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
$longpalabra=8;
for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
  $x = rand(0,$n);
  $pass.= $caracteres[$x];
}

echo $pass;


	?>
</body>
</html>