// Récupération des variables
var motif = document.getElementById('motif');
var dateDebTra = document.getElementById('dateDebTra');
var dateFinTra = document.getElementById('dateFinTra');
var cout = document.getElementById('cout');
var validation = document.getElementById('validTra');

// Test du motif
motif.addEventListener('keyup',function(){
	if(motif.value.length>0 && motif.value.length<25){
		motif.style.borderColor = "green";
	}else{
		motif.style.borderColor = "red";
	}
},false);

//Test du cout et que ce soit bien un chiffre
cout.addEventListener('blur',function(){
	var coutSplit = cout.value.split("");

	for(var i=0;i<coutSplit.length;i++){
		if(isNaN(coutSplit[i]) || coutSplit[i]==" "){
			coutSplit[i]=null;
		}
	}
	cout.value = coutSplit.join("");
	if(cout.value!=0){
		cout.style.borderColor = "green";
	}else{
		cout.style.borderColor = "red";
	}
},false);

//Vérification que tous les champs soient bien remplis
//si oui on valide le formulaire 
//sinon on bloque l'action et on prévient l'utilisateur
validation.addEventListener('click',function(e){
	if(motif.style.borderColor != "green" || cout.style.borderColor != "green" || dateDebTra.value == "" || dateFinTra.value==""){
		e.preventDefault();
		alert("Un champ n'a pas été rempli ou est incorrect.");
	}
},false);