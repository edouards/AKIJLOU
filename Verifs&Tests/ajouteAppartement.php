<form class="form-horizontal" method="POST" action="espaceUser.php">
	<fieldset>
		<label for="ad1">Adresse</label>
		<input type="text" id="ad1" name="ad1"/>
		<label for="cplt">Complément d'adresse</label>
		<input type="text" id="cplt" name="cplt"/>
		<label for="cpAppart">Code Postal</label>
		<input type="text" id="cpAppart" name="cpAppart"/>
		<label for="villeAppart">Ville</label>
		<input type="text" id="villeAppart" name="villeAppart"/>
		<label for="caution">Montant de la caution</label>
		<input type="text" id="caution" name="caution" placeholder="exemple...500"/></br></br>
		
		<button type="submit" id="validAppart" class="btn btn-success">Valider</button>
	</fieldset>
</form>
<script src="Javascript/VerifAppart.js"></script>