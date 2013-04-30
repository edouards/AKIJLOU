// récupération des valeurs du formulaire
var adresse = document.getElementById('ad1');

var cpAppart = document.getElementById('cpAppart');
var villeAppart = document.getElementById('villeAppart');
var caution = document.getElementById('caution');
var validation = document.getElementById('validAppart');

//Si l'adresse est supérieure à 5 caractères et non nulle
//alors le cadre est vert
//sinon le cadre est rouge
adresse.addEventListener('keyup',function(){
	if(adresse.value.length>=5 && adresse.value!="" ){
		adresse.style.borderColor = 'green';
	}else{
		adresse.style.borderColor = 'red';
	}
},false);

//Vérifie que le code postal soit bien d'une longueur de 5
cpAppart.addEventListener('keyup',function(){
	if(cpAppart.value.length==5){
		cpAppart.style.borderColor = 'green';
	}else{
		cpAppart.style.borderColor = 'red';
	}
},false);

//Vérifie que le nom de la ville soit supèrieur ou égal à 2 caractères
villeAppart.addEventListener('keyup',function(){
	if(villeAppart.value!="" && villeAppart.value.length>=2){
		villeAppart.style.borderColor = 'green';
	}else{
		villeAppart.style.borderColor = 'red';
	}
},false);

//Vérifie que la caution soit bien un nombre
caution.addEventListener('blur',function(){
	var cautionSplit = caution.value.split("");

	for(var i=0;i<cautionSplit.length;i++){
		if(isNaN(cautionSplit[i]) || cautionSplit[i]==" "){
			cautionSplit[i]=null;
		}
	}
	caution.value = cautionSplit.join("");
	if(caution.value!=0){
		caution.style.borderColor = 'green';
	}else{
		caution.style.borderColor = 'red';
	}
},false);

//Empêche la redirection si un des champs  vérifier n'est pas correct ou vide
validation.addEventListener('click',function(e){
	if(adresse.value=="" || cpAppart.value=="" || villeAppart.value=="" || caution.value==""){
		if(adresse.value<5 || cpAppart!=5 || villeAppart.value<2){
			e.preventDefault();
		}
		e.preventDefault();
		alert("Un champ n'a pas été rempli ou est incorrect.");
	}
},false);