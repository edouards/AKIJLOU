// On vérifie les champs du formulaire avant de l'envoyer
var objet = document.getElementById('objet');
var message = document.getElementById('message');
var valid = document.getElementById('validCom');

//Vérification de l'objet
objet.addEventListener('blur',function(){
	if(objet.value.length<=50 && objet.value.length>0){
		objet.style.borderColor = "green";
	}else{
		objet.style.borderColor = "red";
	}
},false);

//vérification du message
message.addEventListener('blur',function(){
	if(message.value.length<=150 && message.value.length>0){
		message.style.borderColor = "green";
	}else{
		message.style.borderColor = "red";
	}
},false);

//Si les champs ne sont pas remplis on empêche l'envoie du formulaire
//sinon on l'envoie
valid.addEventListener('click',function(e){
	if(objet.value.length==0 || message.value.length==0){
		e.preventDefault();
		alert("Un champ n'a pas été rempli ou est incorrect.");
	}
},false);