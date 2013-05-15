// récupération des valeurs du formulaire
var adresse = document.getElementById('ad1');

var cpAppart = document.getElementById('cpAppart');
var villeAppart = document.getElementById('villeAppart');
var loyer = document.getElementById('loyer');
var superficie = document.getElementById('superficie');
var nbPiece = document.getElementById('nbPiece');
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

//Vérifie que la loyer soit bien un nombre
loyer.addEventListener('blur',function(){
	var loyerSplit = loyer.value.split("");

	for(var i=0;i<loyerSplit.length;i++){
		if(isNaN(loyerSplit[i]) || loyerSplit[i]==" "){
			loyerSplit[i]=null;
		}
	}
	loyer.value = loyerSplit.join("");
	if(loyer.value!=0){
		loyer.style.borderColor = 'green';
	}else{
		loyer.style.borderColor = 'red';
	}
},false);

//Vérifie que la superficie soit supèrieure ou égale à la norme
superficie.addEventListener('keyup',function(){
	if(superficie.value>=9){
		superficie.style.borderColor = "green";
	}else{
		superficie.style.borderColor = "red";
	}
},false);
//Vérification de la superficie lorsqu'on la choisi avec les flèches
superficie.addEventListener('change',function(){
	if(superficie.value>=9){
		superficie.style.borderColor = "green";
	}else{
		superficie.style.borderColor = "red";
	}
},false);

//Vérification du nombre de pièces
nbPiece.addEventListener('keyup',function(){
	if(nbPiece.value>=1){
		nbPiece.style.borderColor = "green";
	}else{
		nbPiece.style.borderColor = "red";
	}
},false);
//Vérification du nombre de pièces lorsqu'on le choisi avec les flèches
nbPiece.addEventListener('change',function(){
	if(nbPiece.value>=1){
		nbPiece.style.borderColor = "green";
	}else{
		nbPiece.style.borderColor = "red";
	}
},false);

//Empêche la redirection si un des champs  vérifier n'est pas correct ou vide
validation.addEventListener('click',function(e){
	if(adresse.value=="" || cpAppart.value=="" || villeAppart.value=="" || loyer.value==""){
		if(adresse.value<5 || cpAppart!=5 || villeAppart.value<2 || superficie.value<9 || nbPiece.value<1){
			e.preventDefault();
			alert("Un champ n'a pas été rempli ou est incorrect.");
		}
		e.preventDefault();
		alert("Un champ n'a pas été rempli ou est incorrect.");
	}
},false);