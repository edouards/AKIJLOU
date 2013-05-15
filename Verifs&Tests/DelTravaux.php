<form method="POST" action="espaceUser.php">
	<fieldset>
		<input type="hidden" id="traId" name="traId" value="<?php echo $travaux[$k]->tra_id;?>"/>
		<input type="submit" class="btn btn-danger" value="Supprimer"/>
	</fieldset>
</form>