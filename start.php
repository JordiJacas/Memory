<!DOCTYPE html>

<html>

<head>


	<title>Inici</title>
	<p><h1>Memory</h1></p>
	<link href="css/start.css" rel="stylesheet">
	<script src="js/script.js"></script>
</head>

<body>

	<audio id="myAudio">
	  <source src="horse.mp3" type="audio/mpeg">
	</audio>

	<button class= "button" id="button2" type="button" value="Reddv" onclick="help()">Ayuda</button>

	<div id="block"></div>

	<!--<form action="php/funcions.php" method="post">
	    <input id= "points" name= "points" value="0" type="text">
	    <input id= "name" name= "name" value="name" type="text">
	    <input id= "save" type="submit" value="Guardar">
    </form>-->


   <button class="button" id="button" type="button" value="Jugar"  onclick="visible()">Jugar</button>
     <!--<button class= "button" id="button2" type="button" value="Reiniciar" onclick="help()">Reiniciar</button>-->



<div id="tabla">
	<?php include 'php/indice.php';
		crea_table();
	?>
	<div id="mov"></div>
</div>

</body>

</html>