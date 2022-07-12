<?php include "actions/inscritaction.php";?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Education &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="style3.css">
	<link rel="stylesheet" href="style2.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		
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
							<li><a href="index.php">Acceuil</a></li>
							<li><a href="parcours.php">Parcours</a></li>
							<li><a href="laboratoire.php">Laboratoire</a></li>
							<li class="btn-cta"><a href="connection.php"><span>Se connecter</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>



    <div class="row">
     <div class="col-md-12">


      <form method="post">
        <h1> Inscription</h1>
        <span><?php if(isset($errorMsg)){ echo '<p>' .$errorMsg. '</p>';}?></span>
        <fieldset>
          
          <legend><span class="number">1</span> Infos personnelles</legend>
        
          <label for="name">Nom:</label>
          <input type="text" id="name" name="nom" require>

          <label for="name">Prenom:</label>
          <input type="text" id="name" name="prenom" require>
        
          <label for="email">Email:</label>
          <input type="email" id="mail" name="email" require>

          <label for="name">Numero catre d'etudiant:</label>
          <input type="text" id="name" name="Numcd" require>
        
      
        </fieldset>
        <fieldset>  
        
          <legend><span class="number">2</span> Autres infomations</legend>

       
         <label for="job">Niveau:</label>
          <select id="job" name="niveau" require>
            <option selected disabled value="">Niveau</option>
            <optgroup label="1er cycle">
              <option value="Licence 1">Licence 1</option>
              <option value="Licence 2">Licence 2</option>
              <option value="Licence 3r">Licence 3</option>
            </optgroup>
            <optgroup label="2nd cycle">
              <option value="Master 1">Master 1</option>
              <option value="Master 2">Master 2</option>
            </optgroup>
            <optgroup label="3em cycle">
              <option value="Doctorat 1">Doctorat 1</option>
              <option value="Doctorat 2">Doctorat 2</option>
              <option value="Doctorat 3">Doctorat 3</option>
              <option value="Doctorat 4">Doctorat 4</option>
            </optgroup>
          </select>
          <label for="job">filiere:</label>
          <select id="job" name="filiere" require>
              <option selected disabled value="">Filiere</option>
              <option value="Mathematique">Maths et application</option>
              <option value="SI">Sciences informatiques</option>
              <option value="Mecaniques">Mecaniques</option>
              <option value="Proba-stat">Probabilitées et statistiques</option>
              <option value="Analyse fondamentale">Analyse fondamentale</option>
              <option value="Algèbre">Algèbre</option>
              <option value="Bases de données">Bases de données</option>
              <option value="Reseaux">Reseaux</option>
          </select>

          <label for="password">Mot de passe:</label>
          <input type="password" id="password"   name="pwd" require>
       </fieldset>
             <div class="d-flex justify-content-center links">
				      	Vous avez deaja un compte?<a href="connection.php">Se connecter</a>
				      </div>
        <button name="validate" type="submit">Enregistrer</button>
        
      </form>
    </div>
  </div>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>

