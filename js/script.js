///Variables 
var mov = 0;
var cards = 0;
var id = [];
var time = 0;
var timer;

function cron(){
	document.getElementById("time").innerHTML = time + " s";
	document.getElementsByName("times")[0].value = time;
	document.getElementsByName("rtimes")[0].value = time;
	time++;
}

function start(){
	timer = setInterval(cron, 1000);
	document.getElementById("block").style.visibility = "hidden";
	document.getElementById("play").style.visibility = "hidden";
	document.getElementById("block").style.opacity = "0";
}

//Funcion para girar la carta boca abajo que se ha seleccionado.
function flip(e){	
		document.getElementById("giro").play(); 
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
	
		vcards1 = document.getElementById(id[0]).src;
		vcards2 = document.getElementById(id[2]).src;
		
		if(vcards1 != vcards2){
			document.getElementById("block").style.visibility = "visible";
			document.getElementById("error").play(); 
			setTimeout(nFlip, 1500);
			cards=0;
		}else{	
		
			document.getElementById("correcto").play();
			//Añadir atributo a las cartas correctas.
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
    document.getElementById("mov").innerHTML = a;
    document.getElementsByName("points")[0].value = mov;
    document.getElementsByName("rpoints")[0].value = mov;
}

//Cuando estan todas las cartas boca arriba, salga un mensaje de que ya has acabado.
function complet(){
  	var y = document.getElementsByClassName("frontFlip").length;
    var total = document.getElementsByClassName("flip").length;
	if(y==total){
		alert("Has acabat!")
		clearInterval(timer);
		eSubmit();
	};
}

//Reinicia la pagina con los valores predeterminados.
function restart(){

	location.reload(true);
}

function eSubmit(){
	document.forms["esubmit"].submit();
}

function rSubmit(){
	document.forms["rsubmit"].submit();
}

function help(){

	var cHelp = document.getElementById("ayuda").innerHTML;//Obtiene el valor del objeto.
	if(cHelp > 0){
   		
   		var frontArr = document.getElementsByClassName("front");
   		var backArr = document.getElementsByClassName("back"); 

   		//Un bucle que mientra haya un numero mayor de cartas boca abajo continua.
   		while(frontArr.length > 0){
   			
   			//Gira las cartas. 
   			frontArr[0].className = "frontFlip";
   			backArr[0].className = "backFlip";
   		}

   		setTimeout(help2, 3000);

   		cHelp--;

   		//suma 5 a los movimientos
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
	var allCards = document.getElementsByClassName("backFlip").length;//cuenta todas las cartas que se muestran.
	var count=0; //contador
	var nextCard=0; //variable que sirve para ir a la siguiente carta si la anterior tiene el valor true en el atributo.

	while(allCards > count){
		//coje el valor del atributo fixed de la sigiente carta.
		var atrib = document.getElementsByClassName("backFlip")[nextCard].getAttribute("fixed");

		//compara el valor del atributo.
		if(atrib == null){
			//das la vuelta a la carta.
			fFlipArr[nextCard].className = "front";
 	 		bFlipArr[nextCard].className = "back"
 	 	}else{
 	 		nextCard++
 	 	}
 	 	count++;
	}
}

