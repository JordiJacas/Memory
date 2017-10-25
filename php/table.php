<html>
<head>
	<title>Memory</title>
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/flip.css" rel="stylesheet">
	<script src="../js/script.js"></script>
</head>
<body>

	<h1>Memory</h1>
	<audio id="error">
	  <source src="../mp3/error.mp3" type="audio/mpeg">
	</audio>
	<audio id="correcto">
	  <source src="../mp3/correcto.mp3" type="audio/mpeg">
	</audio>
	<audio id="giro">
	  <source src="../mp3/giro.mp3" type="audio/mpeg">
	</audio>

<?php
//variables
$name = $_POST['name'];
$dim = $_POST['dim'];
?>
<div id ="block" > 
	<img id="play" src="../img/play.png" onclick="start()">
</div>

<div class="bvc">
	<div class="bevel tl tr"></div>
	<div class="content">
		<div id="demo">
			<p class = "name">Nombre</p>
			<?php echo "<p class = 'vName'>".$name."</p>"?>
		</div>
		<div id="demo">
			<p class = "name">Movimientos</p>
			<p id = "mov" class = "vName">0</p>
		</div>
		<div id="demo">
			<p class = "name">Tiempo</p>
			<p id = "time" class = "vName">0 s</p>
		</div>
		<div id="demo">
			<p class = "name">Ayuda</p>
			<p id= "ayuda" class = "vName">3</p>
		</div>	
	</div>
	<div class="bevel bl br"></div>
</div>

<div id="table">
<?php

session_start();
if ($dim === '4x4'){
	$filas = 4; 
	$celdas = 4;
	$array = array('1.jpg', '1.jpg','2.jpg', '2.jpg', '3.jpg', '3.jpg', '4.jpg', '4.jpg', '5.jpg', '5.jpg', '6.jpg', '6.jpg','7.jpg','7.jpg','8.jpg','8.jpg');
	$width='120px';
	$height='120px';

	if (!isset($_SESSION['cartas'])){
		shuffle($array);
		$_SESSION['cartas'] = $array;
	}
	
	$array = $_SESSION['cartas'];

}elseif ($dim === '6x6'){
	$filas = 6; 
	$celdas = 6;
	$array = array('1.jpg', '1.jpg','2.jpg', '2.jpg', '3.jpg', '3.jpg', '4.jpg', '4.jpg', '5.jpg', '5.jpg', '6.jpg', '6.jpg','7.jpg','7.jpg','8.jpg','8.jpg','9.jpg','9.jpg','10.jpg','10.jpg','11.jpg','11.jpg','12.jpg','12.jpg','13.jpg','13.jpg','14.jpg','14.jpg','15.jpg','15.jpg','16.jpg','16.jpg','17.jpg','17.jpg','18.jpg','18.jpg');
	$width='80px';
	$height='80px';

	if (!isset($_SESSION['cartas2'])){
		shuffle($array);
		$_SESSION['cartas2'] = $array;
	}
	
	$array = $_SESSION['cartas2'];

}elseif ($dim === '8x8'){
	$filas = 8; 
	$celdas = 8;
	$array = array('1.jpg', '1.jpg','2.jpg', '2.jpg', '3.jpg', '3.jpg', '4.jpg', '4.jpg', '5.jpg', '5.jpg', '6.jpg', '6.jpg','7.jpg','7.jpg','8.jpg','8.jpg','9.jpg','9.jpg','10.jpg','10.jpg','11.jpg','11.jpg','12.jpg','12.jpg','13.jpg','13.jpg','14.jpg','14.jpg','15.jpg','15.jpg','16.jpg','16.jpg','17.jpg','17.jpg','18.jpg','18.jpg','19.jpg','19.jpg','20.jpg','20.jpg','21.jpg','21.jpg','22.jpg','22.jpg','23.jpg','23.jpg','24.jpg','24.jpg','25.jpg','25.jpg','26.jpg','26.jpg','27.jpg','27.jpg','28.jpg','28.jpg','29.jpg','29.jpg','30.jpg','30.jpg','31.jpg','31.jpg','32.jpg','32.jpg');
	$width='60px';
	$height='60px';

	if (!isset($_SESSION['cartas3'])){
		shuffle($array);
		$_SESSION['cartas3'] = $array;
	}
	
	$array = $_SESSION['cartas3'];
}

$contador = 0;
$cont = 1;

echo "<table>";

for( $i=1; $i<=$filas; $i++ ) { 
	echo "<tr>";
	for($j=1; $j<=$celdas; $j++) {
		echo "<td class='flip' style='width:".$width."; height:".$height.";'>
				<img src='../img/".$array[$contador]."'  id='".$cont."_1' class='back' style='width:".$width."; height:".$height.";'>
				<img src='../img/fondo.jpg' id ='".$cont."_2' class='front' onclick='flip(".$cont.")' style='width:".$width."; height:".$height.";'>	        			
			 </td>";
		$contador++;
		$cont++;
	}	
	echo"</tr>";
}
echo "</table>";

?>
  
</div>

<div class="buttons">
	<img class = "bStyle " src="../img/restart.png" onclick="restart()">
	<img id="help" class = "bStyle " src="../img/help.png" onclick="help()">
	<img class = "bStyle " src="../img/ranking.png" onclick="rSubmit()">
</div>

<form action="save.php" method="post" id="esubmit" target="_blank">
	<?php echo "<input type='text' name='name' value='".$name."'/>"?>
	<input type="text" name="points" value="0"/>
	<input type="text" name="times" value="0"/>
</form>

<form action="ranking.php" method="post" id="rsubmit">
	<?php echo "<input type='text' name='nameRanking' value='".$name."'/>"?>
</form>

</body>
</html>