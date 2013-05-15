<form method="POST" action="espaceUser.php">
	<fieldset>
		<input type="hidden" id="locId" name="locId" value="<?php echo $locataires[$m]->loc_id;?>"/>
		<input type="submit" class="btn btn-danger" value="Supprimer"/>
	</fieldset>
</form>