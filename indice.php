<head>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php

	function crea_table(){

		$filas = 4;
		$celdas = 3;
		$contador = 0;

		$array = array('cabeza.jpg', 'cabeza.jpg','brazo.jpg', 'brazo.jpg', 'pierna1.jpg', 'pierna1.jpg', 'brazo2.jpg', 'brazo2.jpg', 'pierna2.jpg', 'pierna2.jpg', 'dragon.jpg', 'dragon.jpg');
		shuffle($array);

	    echo "<table>";

	    for( $i=1; $i<=$filas; $i++ ) { 
	        echo "<tr>";

	        for($j=1; $j<=$celdas; $j++) {
	        	echo "<td><div class='container'>
	        			<img src='img/$array[$contador]' width=120 height=150 id=$j.'_1' class='back'>
	        			<img src='img/fondo.jpg' width=120 height=150 id =$j.'_2' class='front'
	        			onclick='flip($contador.'_')'>
	        		 </td>";

	        	$contador++;
	       		
		    }	
		    echo"</tr>";
		}

		echo "</table>";
	}

	crea_table();
?>
</body>