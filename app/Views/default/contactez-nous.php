<?php $this->layout('layout', ['title' => 'Contactez-nous']) ?>

<?php $this->start('main_content') ?>
	<h2>Contact </h2>
	<p>- N'hésitez pas à nous contacter toute demande.</p>
	
<!--	echo $confirmationVue;

	echo $datasFormVue['prenom'] ;  -->

<?php

// $prenom = "";
// $nom = "";
// $email = "";
// $message = "";
// $confirmation = "";
// $erreur = "";
// $contenu = "";


// if(isset($_POST['envoi'])) 
// {
// 	$prenom = $_POST['prenom'];
// 	$nom = $_POST['nom'];
// 	$email = $_POST['email'];
// 	$message = $_POST['message'];
// 	$confirmation = "<div class='confirmation'>Le message de ". $_POST['prenom']." ".$_POST['nom']. " a bien été envoyé.</div>";

// 		if(empty($_POST['nom']) OR empty($_POST['prenom']) OR empty($_POST['message']) OR empty($_POST['email'])) // si Prénom, NOM, message, ou E-mail sont vides...
// 		{
// 			echo $erreur = "<div class='erreur'>Tous les champs doivent être remplis.</div>"; //...cette erreur apparaît
// 		}
// 		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // vérifie la validité de l'E-mail, trop fort le PHP!
// 		{
// 			echo $erreur = "<div class='erreur'>Il nous faut une @dresse E-mail valide, svp...</div>"; 
// 		}
// 		else
// 		{
// 			echo $confirmation ; // si tout est bien rempli, message de confirmation apparaît
// 		}
// 	}
	?>
	
<!-- <style scoped>
	body {font-family: sans-serif;}
	.confirmation{background: blue; color:#fff; padding: 10px 10px}
	.erreur{background: red; color:#fff; padding: 10px 10px}
</style>  --> 

		
		<form method="post" action="<?=$this->url=('messageviacontactpage') ?>" class="form">
			
			<!-- <p>Civilité:<br> -->
			<label for="homme" class="labelRadio">Monsieur</label>
			<input type="radio" id="homme" name="civilite" value="M." ><br>
			<label for="femme" class="labelRadio">Madame</label>
			<input type="radio" id="femme" name="civilite" value="Mme" ><br>
			<!-- </p>
 -->
			<label for="nom">Nom *</label>
			<input type="text" id="nom" name="nom" value="<?= $datasFormVue['nom']; ?>" placeholder="Votre NOM. Ex: DUPONT"><br>

			<label for="prenom">Prénom *</label>
			<input type="text" id="prenom" name="prenom" value="<?= $datasFormVue['prenom']; ?>" placeholder="Votre Prénom. Ex: Jean" >	<br>

			<label for="email">E-mail *</label>
			<input type="text" id="email" name="email" value="<?= $datasFormVue['email']; ?>" placeholder="Votre E-mail. Ex: jd@mail.com"><br>	

			<label for="message">Votre message *</label>
			<textarea name="message" id="message"> <?= $datasFormVue['message']; ?></textarea><br>
			
			<input type="submit" name="envoi" value="Envoyez">
		</form>
		<p>(* Attention: tous les champs sont obligatoires.)</p>

		<h2>Hôtel des Voisins</h2>
		<p>82 Avenue Denfert-Rochereau <br>75014 PARIS<br>FRANCE<br>notreadresse@email.com<br>Tél.: +33 (o)1 4234 5678<br>
		</p>

<?php

echo $confirmationVue;

?>

<?php $this->stop('main_content') ?>