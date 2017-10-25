<head>
	<link href="css/style.css" rel="stylesheet">
	<script src="js/script.js"></script>
</head>
<body>

<?php

	//Creacion de la tabla y colocacion de las cartas aleatoriamente.
	function crea_table(){
		$filas = 3;
		$celdas = 4;	
		$contador = 0;
		$cont = 1;
		$array = array('mago.jpg', 'mago.jpg','obelix.jpg', 'obelix.jpg', 'slifer.jpg', 'slifer.jpg', 'ra.jpg', 'ra.jpg', 'craneo.jpg', 'craneo.jpg', 'dragon.jpg', 'dragon.jpg');
		shuffle($array);

	    echo "<table align='center'>";

	    for( $i=1; $i<=$filas; $i++ ) { 
	        echo "<tr>";
	        for($j=1; $j<=$celdas; $j++) { 
	        	echo "<td class='flip'>
	        			<img src='img/".$array[$contador]."'  id='".$cont."_1' class='back'>
						<img src='img/fondo.jpg' id ='".$cont."_2' class='front' onclick='flip(".$cont.")'>	        			
	        		 </td>";
	        	$contador++;
				$cont++;
		    }	
		    echo"</tr>";
		}
		echo "</table>";
	}

	//Le el archivo ranking.txt y inserta los valores dentro de una array.
	function readPoints(){
		$f = fopen("txt/ranking.txt","r");

		while(!feof($f)) {
			$linea = fgets($f);
			if(!empty($linea )){
				list($name, $points) = explode(':', $linea);
				$array[$name]=(int)$points;
			}
		}

		asort($array);
		fclose($f);
		return $array;

	}

	//Crea y muestra el ranking.
	function classificacio(){
		
		$class = readPoints();
		
		echo"<table>";
			echo "<tr>	
					<th>Nom</th>
					<th>Movimientos</th>
				  </tr>";		
		
		foreach($class as $clave => $valor){
			echo "<tr>
					 <td class='rank'>".$clave."</td>
					 <td class='rank'>".$valor."</td>
				</tr>";
		}
		
		echo"</table>";	
	}

?>
</body>