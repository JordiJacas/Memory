<head>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/start.css" rel="stylesheet">
	<script src="js/script.js"></script>

</head>
<body>


<?php

	function crea_table(){
		$filas = 3;
		$celdas = 4;	
		$contador = 0;
		$cont = 1;
		$array = array('cabeza.jpg', 'cabeza.jpg','brazo.jpg', 'brazo.jpg', 'pierna1.jpg', 'pierna1.jpg', 'brazo2.jpg', 'brazo2.jpg', 'pierna2.jpg', 'pierna2.jpg', 'dragon.jpg', 'dragon.jpg');
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
		arsort($class);


		echo"<table>";
			echo "<tr>	
					<td>Nom</td>
					<td>Punts</td>
				  </tr>";
		for($v=0;$v<=3;$v++){
			echo "<tr>
					<td>".key($class[$v])."</td>
					<td>".$class[$v][key($class[$v])]."</td>
				</tr>";
		}
		echo"</table>";
	}
?>

<?php
	$mov = $_POST['ola'];
	echo "ola".$mov;
?>
	<form action=" " method="post">
		<div id='demo' name="test">30</div>
		<input type="text" name="ola">
	<form>

</body>