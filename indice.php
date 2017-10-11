<?php

	function crea_table(){

		$filas = $_POST["filas"];
		$celdas = $_POST["celdas"];

	    echo "<table>";

	    for( $i=1; $i<=$filas; $i++ ) { 
	        echo "<tr>";

	        for($j=1; $j<=$celdas; $j++) {
	        	echo "<td><img src='Imagenes/joker.jpeg' width=100 height=100></img></td>";
	       
		    }	
		    echo"</tr>";
		}

		echo "</table>";
	}

	crea_table();
?>