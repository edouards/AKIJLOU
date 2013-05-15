//Vérification qu'une photo est bien été importé pour poursuivre
//Récupération des valeurs
var libPhoto = document.getElementById('nomPh');
var validation = document.getElementById('validPh');

validation.addEventListener('click',function(e){
	if(libPhoto.value.length<=0){
		e.preventDefault();
		alert("Vous n'avez pas sélectionné de photo");
	}
},false); 