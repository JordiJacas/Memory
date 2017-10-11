<!DOCTYPE html>

<html>

<head>

	<title>Inici</title>
	<p><h1>Memory</h1></p>

	<style>

		body{
			margin:0 auto;
		}

		td{
			border: 1px solid black;
			height: 20px;
			width: 20px;
			background-image: Imagenes/joker.jpeg
			background-repeat: no-repeat;
		}

		table{
			position: relative;
			text-align: center;
			width: 100px;
			height: 100px;
		}

	</style>

</head>

<body>
<?php
	echo"<form method='post' action='indice.php'> 
		<input name='filas'>
		<input name='celdas'>
		<button type='submit'>Crear</button>
		</form>"
?>

</body>

</html>