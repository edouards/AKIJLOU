// On récupère les champs pour la vérification
var nomloc = document.getElementById('nomLoc');
var prenomloc = document.getElementById('prenomLoc');
var indate = document.getElementById('dateEnter');
var cautionversee = document.getElementById('cautionVersee');
var garant = document.getElementById('garant');
var situation = document.getElementById('situation');
var validation = document.getElementById('validLoc');

//Vérification du nom
nomloc.addEventListener('keyup',function(){
	//Si non nul alors on affiche le cadre en vert
	//Sinon on affiche le cadre en rouge
	if(nomloc.value.length>=1 && nomloc.value!=" "){
		nomloc.style.borderColor = "green";
	}else{
		nomloc.style.borderColor = "red";
	}
},false);

//Vérification du prénom
prenomloc.addEventListener('keyup',function(){
	//Si non nul alors on affiche le cadre en vert
	//Sinon on affiche le cadre en rouge
	if(prenomloc.value.length>=1 && prenomloc.value!=" "){
		prenomloc.style.borderColor = "green";
	}else{
		prenomloc.style.borderColor = "red";
	}
},false);

//Vérification de la caution versée
//et que la caution soit bien un nombre
cautionversee.addEventListener('blur',function(){
	var cautionSplit = cautionversee.value.split("");

	for(var i=0;i<cautionSplit.length;i++){
		if(isNaN(cautionSplit[i]) || cautionSplit[i]==" "){
			cautionSplit[i]=null;
		}
	}
	cautionversee.value = cautionSplit.join("");
	if(cautionversee.value!=0){
		cautionversee.style.borderColor = "green";
	}else{
		cautionversee.style.borderColor = "red"
	}
},false);

//Vérification du garant
garant.addEventListener('keyup',function(){
	if(garant.value.length>=2 && garant.value!=" "){
		garant.style.borderColor = "green";
	}else{
		garant.style.borderColor = "red";
	}
},false);

//On vérifie que le formulaire est été rempli
validation.addEventListener('click',function(e){
	if(nomloc.style.borderColor != "green" ||
		prenomloc.style.borderColor != "green" ||
		cautionversee.style.borderColor != "green" ||
		garant.style.borderColor != "green" ||
		situation.value.length ==0 ||
		indate.type!= "date"){
		//Sinon on empêche la redirection et on l'indique à l'utilisateur
		e.preventDefault();
		alert("Un champ n'a pas été rempli ou est incorrect.");
	}
},false);