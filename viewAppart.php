<div class="accordion" id="accordionAppart">
	<?php
	for($i=0;$i<COUNT($appartement);$i++){?>
		<div class="accordion-group">
			<div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionAppart" href="<?php echo '#collapse'.$i;?>">
			    <?php echo "<i class='icon-home'></i> ".$appartement[$i]->app_ad1." ".$appartement[$i]->app_ad2." ".$appartement[$i]->app_cp." ".$appartement[$i]->app_ville; ?>
			  </a>
			</div>
			<div id="<?php echo 'collapse'.$i;?>" class="accordion-body collapse">
			  <div class="accordion-inner">

			  	<!-- Tableau récapitulent les informations relatives à un appartement -->
			  	<table class="table table-bordered">
			  		<thead>
			  			<tr>
			  				<th>Caution</th>
			  				<th>Infos Locataire</th>
			  			</tr>
			  		</thead>
			  		<tbody>
			  			<tr>
						    <?php 
						    //On affiche la caution de l'appartement
						    ?><td><?php echo $appartement[$i]->app_caution."€"; ?></td><?php
						    //On récupère les infos de l'éventuel locataire qui occupe l'appartement
						    $result = $connect->prepare("SELECT * FROM locataire WHERE loc_idApp=:appId");
						    $result->bindParam(":appId",$appartement[$i]->app_id);
						    $result->execute();
						    $locataires = $result->fetchAll(PDO::FETCH_OBJ);
						    //Si l'appartement est occupé on affiche les infos
					    	if(isset($locataires[0])){
					    		for($j=0;$j<COUNT($locataires);$j++){
					    			?><td><?php print_r($locataires);?></td><?php
					    		}
					    	}else{
					    		//Sinon on propose à l'utilisateur d'ajouter un locataire
					    		?><td><?php echo "Pas de locataire pour cet appartement.";?>
					    				<a class="btn btn-success" href="Verifs&Tests/ajouteLocataire.php">
					    					Ajouter un locataire <i class="icon-plus icon-white"></i>
					    				</a>
					    			</td><?php
					    	}
						    ?>
					</tr>
					</tbody>
				</table>

			  </div>
			</div>
		</div>
<?php } ?> 	
	<div class="accordion-group">
		<div class="accordion-heading">
		  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionAppart" href="#collapseAjoute">
		  	Ajouter un appartement
		  </a>
		</div>
		<div id="collapseAjoute" class="accordion-body collapse">
			<div class="accordion-inner">
				<?php include("Verifs&Tests/ajouteAppartement.php"); ?>
			</div>
		</div>
	</div>
</div>