//Variables 
var mov = 0;
var cards = 0;
var id = [];

//Funcion para girar la carta boca abajo que se ha seleccionado.
function flip(e){	
		document.getElementById(e+"_1").className = "backFlip";
		document.getElementById(e+"_2").className = "frontFlip";
		cards++;
		id.push(e+"_1");
		id.push(e+"_2")
		numCards(cards);
}

//Cuenta las cartas y las compara, tambien suma los movimientos del usuario.
function numCards(cards){
	
	if(cards%2==0){
		mov++;
		//vcards1 = document.getElementById(id[0]).innerHTML;
		//vcards2 = document.getElementById(id[2]).innerHTML;
	
		vcards1 = document.getElementById(id[0]).src;
		vcards2 = document.getElementById(id[2]).src;
		
		if(vcards1 != vcards2){
			document.getElementById("block").style.visibility = "visible";
			document.getElementById("myAudio").play(); 
			setTimeout(nFlip, 1500);
			cards=0;
			
		}else{
			document.getElementById(id[0]).setAttribute("fixed", "true");
			document.getElementById(id[1]).setAttribute("fixed", "true");
			document.getElementById(id[2]).setAttribute("fixed", "true");
			document.getElementById(id[3]).setAttribute("fixed", "true");

			id = [];


		}
		
	}
	
	printInt(mov);
	complet();
}

//Vuelve a girar las cartas boca arriba.
function nFlip(){

		document.getElementById(id[0]).className = "back";
		document.getElementById(id[1]).className = "front";

		document.getElementById(id[2]).className = "back";
		document.getElementById(id[3]).className = "front";
		
		id = [];
		
		document.getElementById("block").style.visibility = "hidden";
}

//Muestra los movimientos que ha realizado el usuario.
function printInt(a){
    document.getElementById("mov").innerHTML = "Movimientos: "+a;
    //sdocument.getElementById("points").value = mov;
}


//Mostrar y posicionar la tabla.
function visible(){
	 document.getElementById("tabla").style.visibility = "visible";
	 document.getElementById("tabla").style.marginLeft = "25%";
	 document.getElementById("tabla").style.top = "28%";
	// document.getElementsByTagName("UL")[0].style.visibility = "hidden";
	//document.getElementById("ranking").style.visibility = "visible";


}

//Reinicia la pagina con los valores predeterminados.
function restart(){

	location.reload(true);
}

//Cuando estan todas las cartas boca arriba, salga un mensaje de que ya has acabado.
function complet(){
	var x = document.getElementById("tabla");
    var y = x.getElementsByClassName("frontFlip").length;
	if(y==12){alert("Has acabat!")};
}

//Introducir el nombre.
function nombre(){
	var person= prompt("Introduce tu nombre: ");
	if(person!=null){
		document.getElementById("name").value = person;
		document.getElementById("nm").innerHTML = person;
	}
}



function help(){
	var cHelp = document.getElementById("ayuda").innerHTML;
	if(cHelp > 0){
   		
   		var frontArr = document.getElementsByClassName("front");
   		var backArr = document.getElementsByClassName("back"); 
   		while(frontArr.length > 0){
   			
   			frontArr[0].className = "frontFlip";
   			backArr[0].className = "backFlip";
   		}

   		setTimeout(help2, 3000);

   		cHelp--;

   		mov = mov + 5;
		printInt(mov);
		document.getElementById("ayuda").innerHTML = cHelp;
	}else{
		alert("No puedes pedir mas ayudas")
	}
	
}


function help2(){
	var fFlipArr = document.getElementsByClassName("frontFlip");
	var bFlipArr = document.getElementsByClassName("backFlip");
	var y = document.getElementsByClassName("backFlip").length;
	var a=0;
	var b=0
	while(y > a){
		var atrib = document.getElementsByClassName("backFlip")[b].getAttribute("fixed");
		if(atrib == null){
			fFlipArr[b].className = "front";
 	 		bFlipArr[b].className = "back"
 	 	}else{b++}
 	 	a++;
	}
}
		    