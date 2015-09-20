<!DOCTYPE html>  
<html lang="fr"> 
	<head>
		 <!-- TITLE -->
		<title> Exercice pratique | server side</title>
		<!-- End TITLE -->

		<!-- METAS -->
		<meta charset="utf-8">
		<meta name="description" content="Crée une petite application qui permette à chacun de savoir comment convaincre ton père (ou ta mère, selon ta préférence) de nous prêter sa voiture au moyen d’options booléennes associées à des arguments qui feront pencher la balance vers un « ok », un « peut-être, à condition de » ou un « dégage, punk ». Au moins une combinaison doit nous permettre d’y arriver.
Lorsque l’on soumet le formulaire, ton interface nous dira si ton père accepterait, sur base des réponses fournies. 
Si la réponse est négative, l’interface remontrera le formulaire pour qu’on puisse réessayer. 
Si la réponse est positive, tu affiches une photo de sa belle BMW et un petit message personnel. ">
		<!-- End METAS -->

		<!-- Open Graph -->
		<meta property="og:title" content="Exercice pratique | server side" />
		<meta property="og:description" content="Crée une petite application qui permette à chacun de savoir comment convaincre ton père (ou ta mère, selon ta préférence) de nous prêter sa voiture au moyen d’options booléennes associées à des arguments qui feront pencher la balance vers un « ok », un « peut-être, à condition de » ou un « dégage, punk »." />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="" />
		<meta property="og:image" content="" />
		<!-- End Open Graph -->

		<!-- TYPEKIT -->
		<!-- End TYPEKIT -->

		<!-- FAVICON -->
		<!-- End FAVICON -->

		<!-- MOBILE -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- // END MOBILE // -->

        <!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		 <!-- GRID(CSS) -->
		<link href="css/hugrid.css" type="text/css" rel="stylesheet" />
		 <!-- End GRID(CSS) -->
		<!-- End CSS -->

	</head>


	<body >



		<div class="container">
			
			<h1>Trouves les bons <strong>arguments</strong> pour convaincre la mère de Quentin de lui laisser la Charlèsmobile ! </h1>

			<form action="" method="GET" class="form-horizontal">


				  <fieldset class="form-group">

				  	<legend>Aller dire bonjour à pépé et mémé</legend>

				   	<label for="pepeOui" class="pure-radio">
						<input type="radio" name="pepe" value="oui" id="pepeOui" required
						<?php if( $_GET['pepe']=='oui'){ echo 'checked="checked"';} ?> > Oui
				   	</label>

					<label for="pepeNon"  class="pure-radio">
						<input type="radio" name="pepe" value="non"  id="pepeNon" required
						 <?php if( $_GET['pepe']=='non'){ echo 'checked="checked"';} ?> > Non
					</label>

				  </fieldset>

				    <fieldset class="form-group">

				  	<legend>Aller en soirée</legend>

				   	<label for="soireeOui" class="pure-radio">
						<input type="radio" name="soiree" value="oui" id="soireeOui" required
						<?php if( $_GET['soiree']=='oui'){ echo 'checked="checked"';} ?> > Oui
				   	</label>

					<label for="soireeNon"  class="pure-radio">
						<input type="radio" name="soiree" value="non"  id="soireeNon" required
						 <?php if( $_GET['soiree']=='non'){ echo 'checked="checked"';} ?> > Non
					</label>

				  </fieldset>

				    <fieldset class="form-group">

				  	<legend>Participer à une course de rue</legend>

				   	<label for="courseOui" class="pure-radio">
						<input type="radio" name="course" value="oui" id="courseOui" required
						<?php if( $_GET['course']=='oui'){ echo 'checked="checked"';} ?> > Oui
				   	</label>

					<label for="courseNon"  class="pure-radio">
						<input type="radio" name="course" value="non"  id="courseNon" required
						 <?php if( $_GET['course']=='non'){ echo 'checked="checked"';} ?> > Non
					</label>

				  </fieldset>

				    <fieldset class="form-group">

				  	<legend>Accompagner un ami à l'hopital</legend>

				   	<label for="hopitalOui" class="pure-radio">
						<input type="radio" name="hopital" value="oui" id="hopitalOui" required
						<?php if( $_GET['hopital']=='oui'){ echo 'checked="checked"';} ?> > Oui
				   	</label>

					<label for="hopitalNon"  class="pure-radio">
						<input type="radio" name="hopital" value="non"  id="hopitalNon" required
						 <?php if( $_GET['hopital']=='non'){ echo 'checked="checked"';} ?> > Non
					</label>

				  </fieldset>

				  <fieldset class="form-group">

				  	<legend>Aller chercher un nouveau clavier</legend>

				   	<label for="clavierOui" class="pure-radio">
						<input type="radio" name="clavier" value="oui" id="clavierOui" required
						<?php if( $_GET['clavier']=='oui'){ echo 'checked="checked"';} ?> > Oui
				   	</label>

					<label for="clavierNon"  class="pure-radio">
						<input type="radio" name="clavier" value="non"  id="clavierNon" required
						 <?php if( $_GET['clavier']=='non'){ echo 'checked="checked"';} ?> > Non
					</label>

				  </fieldset>


				   <fieldset class="form-group">

				  	<legend>sextape avec la collègue</legend>

				   	<label for="sexeOui" class="pure-radio">
						<input type="radio" name="sexe" value="oui" id="sexeOui" required
						<?php if( $_GET['sexe']=='oui'){ echo 'checked="checked"';} ?> > Oui
				   	</label>

					<label for="sexeNon"  class="pure-radio">
						<input type="radio" name="sexe" value="non"  id="sexeNon" required
						 <?php if( $_GET['sexe']=='non'){ echo 'checked="checked"';} ?> > Non
					</label>

				  </fieldset>


				  		<input class="btn btn-success button" type="submit" value="Demander">

			</form>

			<?php 
				function arguments($pepe,$soiree,$course,$hopital,$clavier,$sexe){
					
					if( ($pepe=='oui' ) && ($soiree=='non' ) && ($course=='non' ) && ($hopital=='oui' ) && ($clavier=='non' ) && ($sexe=='non' ) ){
						echo "<h2> Ok ! </h2>"."<img src='img/car.jpg' alt='CharlesMobile' title='CharlesMobile'>";				
					} 
					else if( ($pepe=='oui' ) && ($soiree=='non' ) && ($course=='non' ) && ($hopital=='oui' ) && ($clavier=='oui' ) && ($sexe=='non' ) ){
							echo "<h2> Peut-être, à condition que tu ranges ta chambre en rentrant ! </h2>";				
					}	
					else {
							echo "<h2> Dégage, punk ! </h2>";	
					}
				} 
					if (!empty($_GET) ) { 
						echo arguments($_GET[ 'pepe'],$_GET[ 'soiree'],$_GET[ 'course'],$_GET[ 'hopital'],$_GET[ 'clavier'],$_GET[ 'sexe'] ); 
					} 	
			?>
			
		</div> <!-- End container -->

		<footer>
			<a href="" class="github">Lien Github</a>
		</footer>





		
		<!-- JAVASCRIPT FILES -->	

			<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
			<script src="js/waypoints.min.js"></script>
		  	<script type="text/javascript" src="js/main.js"></script>

			<!-- GRID(JS) -->
			<script src="js/hugrid.js"></script>
			<!-- End GRID(JS) -->

	  	<!-- End JAVASCRIPT FILES -->

	</body>
</html>	
