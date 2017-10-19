<?php
	//Guarda los puntos y nombre de la partida.
	function savePoints(){
		if($f = fopen("../txt/ranking.txt","a")){
			$name = $_POST['name'];
			$points = $_POST['points'];

			if(!fwrite($f,$name.":".$points."\n")){
				echo "<p>error al escribir</p>";
			}else{
				fclose($f);
				header("Location: http://localhost/Memory/start.php");
			}
		}else{
			echo "<p>error al abrir</p>";
			
		}
	}
	
	savePoints();
?>