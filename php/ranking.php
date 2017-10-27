<?php
	session_start();
?>
<html>
<head>
	<link href="../css/style.css" rel="stylesheet">
	<title>Memory</title>
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
				array_push($array, $points, $time, $name);

				array_push($aTotal, $array);
			}
		}
		sort($aTotal);
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
					<td class='colum1'>".$class[$pos][2]."</td>
					<td>".$class[$pos][0]."</td>
					<td>".$class[$pos][1]."</td>
				</tr>";
		}
		echo"</table>";	
?>
<p id="ranking2"><u>RANKING PERSONAL</u></p>
<?php		
		$name = $_POST['nameRanking'];
		$points = $_POST['rpoints'];
		$time = $_POST['rtimes'];
		

	if (isset($_SESSION['ranking'])){

		$array2 = $_SESSION['ranking'];

		$array = [];
		array_push($array, $name,$points,$time);
		array_push($array2, $array);
		$_SESSION["ranking"] = $array2;
	}else{
		$array2 = [];
		$array = [];
		array_push($array, $name,$points,$time);
		array_push($array2, $array);
		$_SESSION['ranking'] = $array2;
	}
		
		//Crea y muestra el ranking Personal.
		$name=$_POST['nameRanking'];
		echo"<table id='personal'>";
			echo "<tr>	
					<th>Nom</th>
					<th>Movimientos</th>
					<th>Tiempo (s)</th>
				  </tr>";		
		for($pos=0;$pos<count($array2);$pos++){
			
				echo "<tr>
					<td class='colum1'>".$array2[$pos][0]."</td>
					<td>".$array2[$pos][1]."</td>
					<td>".$array2[$pos][2]."</td>
				</tr>";
			}
		echo"</table>";
?>

<a id="home" href="../index.html"><img class = "bStyle" src="../img/home.png"></a>

</body>
</html>