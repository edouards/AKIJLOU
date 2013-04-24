<!--Formulaire d'enregistrement des nouveaux utilisateurs-->

<form id="signup" method="POST" class="form-horizontal" action="espaceUser.php">
	<fieldset>
		<legend>Formulaire d'enregistrement</legend>
		<span class="help-block">Tous les champs sont obligatoires</span></br>
		<div class="control-group">
			<label for="username" class="control-label">Nom d'utilisateur</label>
			<div class="controls">
				<input id="username" name="username" type="text"/>
			</div>
		</div>
		<div class="control-group">
			<label for="passwd" class="control-label">Mot de passe</label>
			<div class="controls">
				<input id="passwd" name="passwd" type="password"/>
			</div>
		</div>
		<button id="valider" type="submit" class="btn btn-success">Valider</button>
	</fieldset>
</form>

<script>
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
</script>

