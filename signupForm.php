<!--Formulaire d'enregistrement des nouveaux utilisateurs-->

<form id="signup" method="POST" class="form-horizontal">
	<fieldset>
		<legend>Formulaire d'enregistrement</legend>
		<span class="help-block">Tous les champs sont obligatoires</span></br>
		<div class="control-group">
			<label for="login" class="control-label">Nom d'utilisateur</label>
			<div class="controls">
				<input id="login" name="login" type="text"/>
			</div>
		</div>
		<div class="control-group">
			<label for="passwd" class="control-label">Mot de passe</label>
			<div class="controls">
				<input id="passwd" name="passwd" type="password"/>
			</div>
		</div>
		<button type="submit" class="btn btn-success">Valider</button>
	</fieldset>
</form>