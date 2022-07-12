<?php require_once('actions/db.conf.php');
 require('actions/security.php');
?>
<?php include "template/head.php"?>
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
							<li><a href="indexConnceter.php">Acceuil</a></li>
							<li class="active"><a href="parcoursConnecter.php">Parcours</a></li>
							<li ><a href="laboratoireConnecter.php">Laboratoire</a></li>
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
<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(parcour/image/enseigne.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Nos cours</h1>
									<h2>Vivez le meilleur moment de vos études</h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Differents parcousrs</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(parcour/image/stat.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Probalitées statiques</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Savoir plus</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(parcour/image/algèbre.jpeg);">
						</a>
						<div class="desc">
							<h3><a href="#">Algèbres</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Savoir plus</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(parcour/image/fonda.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Mathematiques Fondamentales</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Savoir plus</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(parcour/image/mecaf.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Mecaniques des systèmes et  fluides</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Savoir plus</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a class="course-img" style="background-image: url(parcour/image/bd.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Bases de données</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							<span><a href="parcour/informatique.php" class="btn btn-primary btn-sm btn-course">Savoir plus</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(parcour/image/resaux.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Reseéaux</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Savoir plus</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(parcour/image/actuariat.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Actuariats</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Savoir plus</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(parcour/image/miage.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Miages</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Savoir plus</a></span>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>

<?php include "template/footer.php"?>