<?php $this->layout('layout', ['title' => ' Réservation étape 1: Nos disponibilités - ']) ?>

<?php $this->start('main_content') ?>
	<h2>Réservation </h2>
	<p>- étape 1: Nos disponibilités - </p>
	
<!-- 
<?php

// $prenom = "";
// $nom = "";
// $email = "";
// $message = "";
// $confirmation = "";
// $erreur = "";
// $contenu = "";

?> -->
<form method="post" action=<?= $this->url('reservation2-formulaire') ?> class="form">
<p>
	date arrivée :
	<input class="datepicker" id="datepicker1_arrivee" name="datepicker1_arrivee" value="<?= $date_arrivee; ?>"><br>

	date départ :
	<input class="datepicker" id="datepicker2_depart" name="datepicker2_depart" value="<?= $date_depart ?>"><br>

	Nombre de nuitées :
	<input type="int" > <br>

	Votre chambre :
	<input type="text" id="chambre" name="chambre"  ><br>
	 <!-- value="< ?= $datasFormVue['chambre']; ?>" -->

	<input type="submit" name="envoi" value="Cherchez"> 
</form>

	<h2>Hôtel des Voisins</h2>
	<p>82 Avenue Denfert-Rochereau <br>75014 PARIS <br>FRANCE <br>notreadresse@email.com <br>Tél.: +33 (o)1 4234 5678 <br>
</p>

<?php

// echo $confirmationVue;

?>

<?php $this->stop('main_content') ?>