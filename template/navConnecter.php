<div class="fh5co-loader"></div>
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div><a href="index.html"><img  src="images/logo.jpg" alt=""></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="indexConnceter.php">Acceuil</a></li>
							<li><a href="parcoursConnecter.php">Parcours</a></li>
							<li><a href="laboratoireConnecter.php">Laboratoire</a></li>
							<li><a href="about.php">Espace Etudiant</a></li>
							<li class="agrandir"> <?php echo $_SESSION['nom']?></li>
							<li class="agrandir"><?php echo $_SESSION['prenom']?></li>
							<li class="agrandir"><?php echo $_SESSION['niveau']?></li>
							<li class="agrandi"><?php echo $_SESSION['filiere']?></li>
							<li class="btn-cta"><a href="actions/deco.php"><span>Deconnexion</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>