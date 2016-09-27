<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/reservation.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
 
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<header>
	<h1>RESERVATION</h1>
</header>
<body>
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="acceuil.php">Accueil</a>
                    </li>
                    <li>
                        <a href="reservation.php">Reservations</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    
                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
 		<div class="resa">
 				<form method="post" action="">
 					<fieldset>
		 				<legend>Identité</legend> </br>
		 				<label> Nom </label>
		 				<input type="text" name="nom"> <br>
		 				</br>

		 				<label> Prenom </label>
		 				<input type="text" name="prenom"> <br>
		 				</br>

		 				<label> Email </label>
		 				<input type="text" name="email"> <br>
		 				</br>

		 				<label> Numero de Telephone </label>
		 				<input type="text" name="numero"> <br>
		 				</br>
 					</fieldset>

 			<div class="room">
 					<fieldset>

		 				<legend>Chambres</legend><br>
		 			
		 				<input type="radio" name="chambres" id="simples">Chambres Simples <br>
		 		
		 			<div id="categorie1">
		 				<input type="radio" name="chambres">Classique <br>
		 				<input type="radio" name="chambres">Luxe <br>
		 				</br>
		 			</div>
		 			
		 				
		 				<input type="radio" name="chambres" id="doubles">Chambres Doubles <br>
		 				
		 			<div id="categorie2">
		 				<input type="radio" name="chambres">Classiques <br>
		 				<input type="radio" name="chambres">Luxe <br>
		 				</br>
		 			</div>
		 				
		 			 	
		 				<input type="radio" name="chambres" id="triples">Chambres Triples <br>
		 				
		 			<div id="categorie3">	
		 				<input type="radio" name="chambres">Classique <br>
		 				<input type="radio" name="chambres">Luxe <br>
		 				</br>
		 			</div>
		 			
		 				
		 			<input type="radio" name="chambres" id="suites" >Suites <br>
		 				
		 			<div id="categorie4">	
		 				<input type="radio" name="chambres">Classique <br>
		 				<input type="radio" name="chambres">Luxe <br>
		 				</br>
		 			</fieldset>
		 			
		 			<fieldset>
		 				<legend>Informations CB</legend>
		 				<label>Type de carte</label>
		 			<ul>
		 				<li><label>Visa</label>
		 					<i class="fa fa-cc-visa" aria-hidden="true"><input type="radio" id="visa" name="visa"></li></i>
		 				<li><label>Master Card</label><i class="fa fa-cc-mastercard" aria-hidden="true"><input type="radio" id="mastercard" name="mastercard"></i></li>
		 				<li><label>American Express</label><i class="fa fa-cc-amex" aria-hidden="true"><input type="radio" id="americanexpress" name="americanexpress"></i></li>
		 			</ul>	

		 			<label>Numero de carte</label> </br>
		 			<input type="text" name="numerodecarte"> </br>

		 			<label>Code de securite</label> </br>
		 			<input type="text" name="codesecurite"> </br>

		 			</fieldset>
		 			 </br>
		 		</div>	
 			
 				<fieldset>
 				<legend>Options</legend> <br> </br>
 				<input type="radio" name="option">Room Service <br> </br>
 				<input type="radio" name="option">Restaurant <br> </br>
 				<input type="radio" name="option">Sauna <br> </br>
 				<input type="radio" name="option">Salle de Sport <br> </br>
 				</fieldset>


 				<input type="submit" name="reserver">
 			</form>
 		</div>	
 		<script type="text/javascript" src="js/reservation.js"></script>
 		
	</body>
</html>