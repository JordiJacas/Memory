var mov = 0;
var cards = 0;
var id = [];


function flip(e){	
		document.getElementById(e+"_1").className = "backFlip";
		document.getElementById(e+"_2").className = "frontFlip";
		cards++;
		id.push(e+"_1");
		id.push(e+"_2")
		numCards(cards);
}

function numCards(cards){
	
	if(cards%2==0){
		mov++;
		//vcards1 = document.getElementById(id[0]).innerHTML;
		//vcards2 = document.getElementById(id[2]).innerHTML;
	
		vcards1 = document.getElementById(id[0]).src;
		vcards2 = document.getElementById(id[2]).src;
		
		if(vcards1 != vcards2){
			document.getElementById("block").style.visibility = "visible";
			setTimeout(nFlip, 1000);
			cards=0;
			
		}else{	id = [];}
		
	}
	
	printInt(mov);
	complet();
}
	
function nFlip(){

		document.getElementById(id[0]).className = "back";
		document.getElementById(id[1]).className = "front";

		document.getElementById(id[2]).className = "back";
		document.getElementById(id[3]).className = "front";
		
		id = [];
		
		document.getElementById("block").style.visibility = "hidden";
}

function printInt(a){
    document.getElementById("mov").innerHTML = "Movimientos: "+a;
}



function visible(){
	document.getElementById("tabla").style.visibility = "visible";
	document.getElementById("tabla").style.marginLeft = "25%";
	document.getElementById("tabla").style.top = "160px";
	document.getElementsByTagName("UL")[0].style.visibility = "hidden";
}

function restart(){
	mov = 0;
	cards = 0;
	id = [];

	location.reload(true);
}

function complet(){
	var x = document.getElementById("tabla");
    var y = x.getElementsByClassName("frontFlip").length;
	if(y==12){alert("Has acabat!")};
}

