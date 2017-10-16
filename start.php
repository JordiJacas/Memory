<!DOCTYPE html>

<html>

<head>


	<title>Inici</title>
	<p><h1>Memory</h1></p>
	<link href="css/start.css" rel="stylesheet">
	<script src="js/script.js"></script>


</head>

<body>
	<div id="block"></div>

    <button class="button" id="button" type="button" value="Jugar" onclick="visible()">Jugar</button>
    <button class= "button" id="button2" type="button" value="Reiniciar" onclick="restart()">Reiniciar</button>


<div id="tabla">
	<?php include 'indice.php';
		crea_table();
	?>

<div id="mov">Movimientos: 0</div>

</div>

<ul>
	<li><i>El juego consiste en un número par de fichas con imágenes de un lado y un reverso genérico. Cada imagen aparece en precisamente dos fichas.</li></i>

	<li><i>Cuando empieza el juego, todas las fichas están volteadas boca abajo.</li></i>

	<li><i>Entonces el jugador voltea dos fichas, seleccionándolas al hacer clic sobre ellas. Si las dos fichas tienen la misma imagen, permanecen boca arriba. De lo contrario, las fichas se voltean boca abajo después de un pequeño periodo de tiempo.</li></i>

	<li><i>El objetivo del juego es conseguir todas las fichas volteadas boca arriba (es decir, encontrar todos los pares de imágenes que coincidan) en el menor número de intentos. Eso significa que el menor número de intentos es una mejor puntuación.</li></i>

</ul>

<p id="pie">Copyright © 2017-2018 Interactive Programmers Community - Todos los derechos reservados</p>

</body>

</html>