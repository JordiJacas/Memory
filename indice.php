<head>
	<link href="css/style.css" rel="stylesheet">
	<script src="js/script.js"></script>
</head>
<body>

<?php
	function crea_table(){
		$filas = 3;
		$celdas = 4;	
		$contador = 0;
		$cont = 1;
		$array = array('mago.jpg', 'mago.jpg','obelix.jpg', 'obelix.jpg', 'slifer.jpg', 'slifer.jpg', 'ra.jpg', 'ra.jpg', 'craneo.jpg', 'craneo.jpg', 'dragon.jpg', 'dragon.jpg');
		shuffle($array);

	    echo "<table>";

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

	function classificacio(){
		
		$class = array(array("Manu"=>32), array("Juan"=>42), array("Pas"=>34));
		//$class[nombre] = puntos;
		sort($class);
		
		echo"<table>";
			echo "<tr>	
					<th>Nom</th>
					<th>Movimientos</th>
				  </tr>";
		for($v=0;$v<=2;$v++){
			echo "<tr>
					<td class='rank'>".key($class[$v])."</td>
					<td class='rank'>".$class[$v][key($class[$v])]."</td>
				</tr>";
		}
		echo"</table>";
	}
?>
</body>