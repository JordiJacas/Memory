<html>
<head>
	<link href="../css/style.css" rel="stylesheet">
</head>
<body>
<p id="ranking"><u>RANKING MUNDIAL</u></p>

<?php

//Le el archivo ranking.txt y inserta los valores dentro de una array.
	function readPoints(){
		$f = fopen("../txt/ranking.txt","r");
		$aTotal = [];
		while(!feof($f)) {
			$linea = fgets($f);
			if(!empty($linea )){
				$array=[];	
				list($name, $points, $time) = explode(':', $linea);
				//$array[$name]= array((int)$points,(int)$time);
				array_push($array, $name, $points, $time);

				array_push($aTotal, $array);
			}
		}
		asort($aTotal);
		fclose($f);
		return $aTotal;
	}
	
		$class = readPoints();

		//Crea y muestra el ranking mundial.
		echo"<table id='mundial'>";
			echo "<tr>	
					<th>Nom</th>
					<th>Movimientos</th>
					<th>Tiempo (s)</th>
				  </tr>";		
			for($pos=0;$pos<count($class);$pos++){
			echo "<tr>
					<td class='colum1'>".$class[$pos][0]."</td>
					<td>".$class[$pos][1]."</td>
					<td>".$class[$pos][2]."</td>
				</tr>";
		}
		echo"</table>";	
?>
<p id="ranking2"><u>RANKING PERSONAL</u></p>
<?php		
		
		//Crea y muestra el ranking Personal.
		$name=$_POST['nameRanking'];
		echo"<table id='personal'>";
			echo "<tr>	
					<th>Nom</th>
					<th>Movimientos</th>
					<th>Tiempo (s)</th>
				  </tr>";		
		for($pos=0;$pos<count($class);$pos++){
			if($class[$pos][0] == $name){
				echo "<tr>
					<td class='colum1'>".$class[$pos][0]."</td>
					<td>".$class[$pos][1]."</td>
					<td>".$class[$pos][2]."</td>
				</tr>";
			}
		}
		echo"</table>";
?>

</body>
</html>