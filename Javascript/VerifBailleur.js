	//On récupère les éléments pour effectuer la vérification
	//si c'est ok on soumet le formulaire
	//sinon on bloque l'envoie pour une correction
	var login = document.getElementById('username');
	var passwd = document.getElementById('passwd');
	var bouton = document.getElementById('valider');

	login.addEventListener('keyup',function(){
		if(login.value.length>=4 && login.value.length!=0){
			login.style.borderColor = "green";
			verif=true;
		}else{
			login.style.borderColor = "red";
		}
	},false);

	passwd.addEventListener('keyup',function(){
		if(passwd.value.length>=8 && passwd.value.length!=0){
			passwd.style.borderColor = "green";

		}else{
			passwd.style.borderColor = "red";
		}
	},false);

	bouton.addEventListener('click',function(e){
		if(login.value=="" || passwd.value==""){
			e.preventDefault();
		}
	},false);