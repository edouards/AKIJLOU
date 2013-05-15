<div class="accordion" id="accordionAppart" style="overflow: auto;">
	<?php
	for($i=0;$i<COUNT($appartement);$i++){?>
		<div class="accordion-group">
			<div class="accordion-heading">
			  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionAppart" href="<?php echo '#collapse'.$i;?>">
			    <?php echo "<i class='icon-home'></i><h4> ".$appartement[$i]->app_ad1." ".$appartement[$i]->app_ad2." ".$appartement[$i]->app_cp." ".$appartement[$i]->app_ville."</h4>"; ?>
			  </a>
			</div>
			<div id="<?php echo 'collapse'.$i;?>" class="accordion-body collapse">
			  <div class="accordion-inner" style="overflow:auto;">

			  	<!-- Tableau récapitulent les informations relatives à un appartement -->
			  	<table class="table table-bordered" style="margin-bottom:120px;">
			  		<thead>
			  			<tr>
			  				<th>Infos Appartement</th>
			  				<th>Commentaires laissés</th>
			  				<th>Travaux Prévus</th>
			  				<th>Photos</th>
			  				<th>Infos Locataire</th>
			  				<th><i class="icon-cog"></i></th>
			  			</tr>
			  		</thead>
			  		<tbody>
			  			<tr>
						    <!--On affiche la caution de l'appartement-->
						    <td><?php include("Verifs&Tests/UpdateAppartInfo.php"); ?></td>

						    <!--On affiche les commentaires laissés sur l'appartement-->
						    <td><?php
						    	//On récupère les commentaires de l'appartement en question
						    	$resultCom = $connect->prepare("SELECT * FROM commentaire WHERE com_idApp = :appId");
						    	$resultCom->bindParam(':appId',$appartement[$i]->app_id);
						    	$resultCom->execute();
						    	$commentaires = $resultCom->fetchAll(PDO::FETCH_OBJ);
						    	//si l'on trouve des commentaires on les affiche
						    	if(isset($commentaires[0])){

						    		for($j=0;$j<COUNT($commentaires);$j++){?>
						    			<div class="btn-group">
										  <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
										    <?php echo $commentaires[$j]->com_objet; ?>
										    <span class="caret"></span>
										  </a>
										  <ul class="dropdown-menu">
										  	<li><?php echo "<strong>Commentaire:</strong> ".$commentaires[$j]->com_content; ?></li>
										  	<li><?php include("Verifs&Tests/DelCommentaire.php"); ?></li>
										  </ul>
										</div><br/>
						    		<?php } ?>
							    		<form method="POST" action="Verifs&Tests/ajouteCommentaire.php"  style="margin:0%;">
							    			<input type="hidden" value="<?php echo $appartement[$i]->app_id;?>" id="idapp" name="idapp"/>
							    			<button type="submit" class="btn btn-success">Ajouter commentaire<i class="icon-white icon-plus"></i></button>
							    		</form>
						    		<?php 
						    	}else{
						    		//Sinon on on propose à l'utilisateur d'en ajouter un
						    		echo"Aucun commentaire sur cet appartement.";
						    		?>
						    		<form method="POST" action="Verifs&Tests/ajouteCommentaire.php" style="margin:0%;">
						    			<input type="hidden" value="<?php echo $appartement[$i]->app_id;?>" id="idapp" name="idapp"/>
						    			<button type="submit" class="btn btn-success">Ajouter commentaire <i class="icon-white icon-plus"></i></button>
						    		</form>
						    		<?php
						    	}
						     ?></td>

						    <!--On récupère les infos des éventuels travaux renseignés-->
						    <td><?php
						    	//récupération de toutes les infos concernants les travaux
						    	$resultTra = $connect->prepare("SELECT * FROM travaux WHERE tra_idApp=:appId");
						    	$resultTra->bindParam(':appId',$appartement[$i]->app_id);
						    	$resultTra->execute();
						    	$travaux = $resultTra->fetchAll(PDO::FETCH_OBJ);
						    	//On en trouve on affiche
						    	if(isset($travaux[0])){
						    		for($k=0;$k<COUNT($commentaires);$k++){?>
						    			<div class="btn-group">
										  <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
										    <?php echo $travaux[$k]->tra_motif; ?>
										    <span class="caret"></span>
										  </a>
										  <ul class="dropdown-menu">
										  	<li><?php echo "<strong>Début:</strong> ".$travaux[$k]->tra_dateDeb; ?></li>
										  	<li><?php echo "<strong>Fin:</strong> ".$travaux[$k]->tra_dateFin; ?></li>
										  	<li><?php echo "<strong>Coût:</strong> ".$travaux[$k]->tra_cout." €"; ?></li>
										  	<li><?php include("Verifs&Tests/DelTravaux.php"); ?></li>
										  </ul>
										</div><br/>
						    		<?php }
						    		?><a href="Verifs&Tests/ajouteTravaux.php?appt=<?php echo $appartement[$i]->app_id;?>" class="btn btn-success">
						    			Ajouter travaux <i class="icon-plus icon-white"></i>
						    		</a><?php
						    	}else{
						    		//Sinon on propose à l'utilisateur d'en ajouter
						    		echo "Aucun travaux de renseignés pour cet appartement.";
						    		?><br/>
						    		<a href="Verifs&Tests/ajouteTravaux.php?appt=<?php echo $appartement[$i]->app_id;?>" class="btn btn-success">
						    			Ajouter travaux <i class="icon-plus icon-white"></i>
						    		</a><br/>
						    		<?php
						    	}
						    ?></td>

						    <!--On répuère les éventuelles photos mises en ligne-->
						    <td><?php
						    	$resultPh = $connect->prepare("SELECT * FROM photo WHERE ph_idApp=:appId");
						    	$resultPh->bindParam(':appId',$appartement[$i]->app_id);
						    	$resultPh->execute();
						    	$photos = $resultPh->fetchAll(PDO::FETCH_OBJ);
						    	//Si l'on trouve des photos alors on les affiche
						    	if(isset($photos[0])){
						    		for($l=0;$l<COUNT($photos);$l++){
						    			?><a href="<?php echo $photos[$l]->ph_chemin.'/'.$photos[$l]->ph_nom;?>" target="_blank">
						    				<img src="<?php echo $photos[$l]->ph_chemin.'/'.$photos[$l]->ph_nom;?>" class="img-polaroid"/>
						    			</a>
						    			<form method="POST" action="espaceUser.php" style="margin:0%;">
						    				<input type="hidden" id="idPh" name="idPh" value="<?php echo $photos[$l]->ph_id;?>"/>
						    				<input type="hidden" id="pathPh" name="pathPh" value="<?php echo $photos[$l]->ph_chemin.'/'.$photos[$l]->ph_nom;?>"/>
						    				<button type="submit" class="btn btn-danger">Supprimer <i class="icon-trash icon-white"></i></button>
						    			</form>
						    			<?php
						    		}
						    		?><br/>
						    		<form method="POST" action="Verifs&Tests/ajoutePhoto.php" style="margin:0%;">
						    			<input type="hidden" id="appId" name="appId" value="<?php echo $appartement[$i]->app_id;?>"/>
						    			<input type="hidden" id="bailId" name="bailId" value="<?php echo $appartement[$i]->app_idBailleur;?>"/>
						    			<button type="submit" class="btn btn-success">
						    				Ajouter photo <i class="icon-plus icon-white"></i>
						    			</button>
						    		</form>
						    		<?php
						    	}else{
						    		//Sinon on propose à l'utilisateur d'en ajouter
						    		echo "Aucune photo enregistrée sur cet appartement.";?>
						    		<br/>
						    		<form method="POST" action="Verifs&Tests/ajoutePhoto.php" style="margin:0%;">
						    			<input type="hidden" id="appId" name="appId" value="<?php echo $appartement[$i]->app_id;?>"/>
						    			<input type="hidden" id="bailId" name="bailId" value="<?php echo $appartement[$i]->app_idBailleur;?>"/>
						    			<button type="submit" class="btn btn-success">
						    				Ajouter photo <i class="icon-plus icon-white"></i>
						    			</button>
						    		</form>
						    	<?php	
						    	}
						    ?></td>

						    <?php
						    //On récupère les infos de l'éventuel locataire qui occupe l'appartement
						    $resultLoc = $connect->prepare("SELECT * FROM locataire WHERE loc_idApp=:appId");
						    $resultLoc->bindParam(":appId",$appartement[$i]->app_id);
						    $resultLoc->execute();
						    $locataires = $resultLoc->fetchAll(PDO::FETCH_OBJ);
						    //Si l'appartement est occupé on affiche les infos
					    	if(isset($locataires[0])){
					    		?><td><?php
					    		for($m=0;$m<COUNT($locataires);$m++){
					    			?>
						    				<div class="btn-group">
											  <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
											    <?php echo $locataires[$m]->loc_nom." ".$locataires[$m]->loc_prenom; ?>
											    <span class="caret"></span>
											  </a>
											  <ul class="dropdown-menu">
											    <li><?php echo "<strong>Date d'entrée:</strong> ".$locataires[$m]->loc_dateEntree; ?></li>
											    <li><?php echo "<strong>Caution versée:</strong> ".$locataires[$m]->loc_caution." €"; ?></li>
											    <li><?php echo "<strong>Situation du locataire:</strong> ".$locataires[$m]->loc_situation; ?></li>
											    <li><?php echo "<strong>Garant:</strong> ".$locataires[$m]->loc_garant; ?></li>
											    <li><?php include("Verifs&Tests/DelLocataire.php"); ?></li>
											  </ul>
											</div>
										<br/>
								<?php
					    		}
					    		?>
					    			<a href="Verifs&Tests/ajouteLocataire.php?appt=<?php echo $appartement[$i]->app_id;?>" class="btn btn-success">
					    				Ajouter locataire <i class="icon-white icon-plus"></i>
					    			</a>
					    		</td><?php
					    	}else{
					    		//Sinon on propose à l'utilisateur d'ajouter un locataire
					    		?><td><?php echo "Aucun locataire renseigné pour cet appartement.";?>
					    				<br/>
					    				<a class="btn btn-success" href="Verifs&Tests/ajouteLocataire.php?appt=<?php echo $appartement[$i]->app_id;?>">
					    					Ajouter locataire <i class="icon-plus icon-white"></i>
					    				</a>
					    			</td><?php
					    	}
						    ?>
						   <td><?php include("Verifs&Tests/DelAppartement.php") ?></td>
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
		  	<h4>Ajouter un bien <i class="icon-plus"></i></h4>
		  </a>
		</div>
		<div id="collapseAjoute" class="accordion-body collapse">
			<div class="accordion-inner">
				<?php include("Verifs&Tests/ajouteAppartement.php"); ?>
			</div>
		</div>
	</div>
</div>