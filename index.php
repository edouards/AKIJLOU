<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">

		<title>AKIJLOU</title>
	</head>
	<body>
		<div class="container" style="height:100%;">
			<div class="navbar-inner">
				<a class="brand" href="index.php"><h1>AKIJLOU</h1></a>
			</div>
			<article>

				<div class="accordion" id="accordion3">
					<div class="accordion-group">
				    <div class="accordion-heading">
				      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseOne">
				        Bienvenue
				      </a>
				    </div>
				    <div id="collapseOne" class="accordion-body collapse in">
				      <div class="accordion-inner">
				        <p>
				        	AKIJLOU est un site web vous permettant de gérer vos locations d'appartement depuis n'importe quel terminal.
				        	L'inscription est gratuite et se fait en un clic ! 
				        	Que ce soit sur vôtre smartphone ou devant vôtre PC, vous saurez toujours à qui vous louez !
				        </p>
				      </div>
				    </div>
				  </div>
				  <div class="accordion-group">
				    <div class="accordion-heading">
				      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseTwo">
				        S'authentifier
				      </a>
				    </div>
				    <div id="collapseTwo" class="accordion-body collapse">
				      <div class="accordion-inner">
				        <?php
				        	include("loginForm.php");
				        ?>
				      </div>
				    </div>
				  </div>
				  <div class="accordion-group">
				    <div class="accordion-heading">
				      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree">
				        S'enregistrer
				      </a>
				    </div>
				    <div id="collapseThree" class="accordion-body collapse">
				      <div class="accordion-inner">
				        <?php
				        	include("signupForm.php");
				        ?>
				      </div>
				    </div>
				  </div>
				</div>
			</article>
			<footer>
				<p style="text-align:center;color:white;">Projet scolaire à but non lucratif, libre de droit.</p>
			</footer>
		</div>

		<script src="jquery/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>