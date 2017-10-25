<?php
	//Guarda los puntos y nombre de la partida.
	function savePoints(){
		if($f = fopen("../txt/ranking.txt","a")){
			$name = $_POST['name'];
			$points = $_POST['points'];
			$time = $_POST['times'];

			if(!fwrite($f,$name.":".$points.":".$time."\n")){
				echo "<p>Error al escribir</p>";
			}else{
				fclose($f);
			}
		}else{
			echo "<p>Error al abrir</p>";
			
		}

		echo " <script type='text/javascript'>
				window.close();
				</script>";
	}
	
	savePoints();
 
?>