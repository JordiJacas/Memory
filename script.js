var intents = 0;
var cards = 0;
var myvar;
var id = [];


function flip(e){	
		document.getElementById(e+"1").className = "backFlip";
		document.getElementById(e+"2").className = "frontFlip";
		cards++;
		id.push(e+"1");
		id.push(e+"2")
		numCards(cards);
}

function numCards(cards){
	if(cards%2==0){
		vcards1 = document.getElementById(id[0]).innerHTML;
		vcards2 = document.getElementById(id[2]).innerHTML;
		if(vcards1 != vcards2){
			setTimeout(nFlip, 2000);
			cards=0;
		}
	}
	intents++;
	printInt(intents);
};
	

function nFlip(){
		document.getElementById(id[0]).className = "back";
		document.getElementById(id[1]).className = "front";

		document.getElementById(id[2]).className = "back";
		document.getElementById(id[3]).className = "front";
		
		id = [];
}

function printInt(a){
    document.getElementById("demo").innerHTML = a;
}