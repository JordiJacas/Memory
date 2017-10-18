<?php
	//Guarda los puntos y nombre de la partida.
	function savePoints(){
		$f = fopen("../txt/ranking.txt","a");
		$name = $_POST['name'];
		$points = $_POST['points'];

		fwrite($f,$name.":".$points);
		fclose($f);
		header("Location: http://localhost/Memory/start.php");
	}
	
	savePoints();
?>