<?php
	//Guarda los puntos y nombre de la partida.
	function savePoints(){
		$f = fopen("../txt/ranking.txt","a");
		$name = $_POST['name'];
		$points = $_POST['points'];

		fwrite($f,"\n".$name.":".$points);
		fclose($f);
		header("Location: http://localhost:8080/Memory/start.php");
	}
	
	savePoints();
?>