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
    <button class="button" type="button" value="Jugar" onclick="visible()">Jugar</button>
    <button class="button2" type="button" value="Reiniciar" onclick="">Reiniciar</button>

<div id="tabla">
	<?php include 'indice.php';
		crea_table();
	?>
	<div id="mov">0</div>
</div>

<ul>
	<li>El juego consiste en un número par de fichas con imágenes de un lado y un reverso genérico. Cada imagen aparece en precisamente dos fichas.</li>

	<li>Cuando empieza el juego, todas las fichas están volteadas boca abajo.</li>

	<li>Entonces el jugador voltea dos fichas, seleccionándolas al hacer clic sobre ellas. Si las dos fichas tienen la misma imagen, permanecen boca arriba. De lo contrario, las fichas se voltean boca abajo después de un pequeño periodo de tiempo.</li>

	<li>El objetivo del juego es conseguir todas las fichas volteadas boca arriba (es decir, encontrar todos los pares de imágenes que coincidan) en el menor número de intentos. Eso significa que el menor número de intentos es una mejor puntuación.</li>

</ul>

<p id="pie">Copyright © 2017-2018 Interactive Programmers Community - Todos los derechos reservados</p>

</body>

</html>