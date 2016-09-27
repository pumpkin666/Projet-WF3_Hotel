<?php $this->layout('layout', ['title' => 'Réservation - étape 2']) ?>

<?php $this->start('main_content') ?>
<h2>Réservation </h2>
<p>- étape 2</p>

<form id="formResa" method="post" action="#" class="form form-inline">

	<fieldset>
		<legend>Votre réservation </legend>
<!--	<style scoped>
			body {font-family: sans-serif;}
			.confirmation{background: blue; color:#fff; padding: 10px 10px}
			.erreur{background: red; color:#fff; padding: 10px 10px}
		</style>  -->
		<div class="form-group">
			<label for="datepicker1_arrivee">date arrivée :</label>
			<input class="datepicker form-control" id="datepicker1_arrivee" name="datepicker1_arrivee" value="<?= $datasFormVue['datepicker1_arrivee']; ?>">
		</div>
		<div class="form-group">
			<label for="datepicker2_depart">date départ :</label>
			<input class="datepicker form-control" id="datepicker2_depart" name="datepicker2_depart"  value="<?= $datasFormVue['datepicker2_depart']; ?>">
		</div>
		<div class="form-group">
			<label for="nb-nuite">Nombre de nuitées :</label>
			<input type="int" class="form-control" id="nb-nuite"> 
		</div>
	</fieldset>
		<fieldset>
			<legend>Types de chambre disponibles</legend>

			<table class="table">
			<thead>
			</thead>
			<tbody>
	<?php foreach($availableTypes as $type): ?>
				<tr>
					<?php $exp = explode('_', $type['capacite']); ?>
					<td><?php echo ucfirst($type['categorie']).' '.ucfirst(end($exp)) ; ?></td>
					<td><?php echo $type['prix_journalier']; ?>€</td>
					<td><input type="radio" name="chambre" value="<?= $type['type'] ?>"></td>
				</tr>
	<?php endforeach; ?>
				</tbody>
			</table>
		</fieldset>
<!-- 			Votre chambre :
	<input type="text" id="chambre" name="chambre" value="< ?= $datasFormVue['chambre']; ?>" > -->
	 
	<fieldset>
		<legend>Vos informations</legend>
		<!-- Civilité: -->
		<div class="form-group">
			<label for="homme" class="labelRadio">Monsieur</label>
			<input type="radio" id="homme" class="form-radio" name="civilite" value="Monsieur" >
		</div>
		<div class="form-group">
			<label for="femme" class="labelRadio">Madame</label>
			<input type="radio" class="form-radio" id="femme" name="civilite" value="Madame" >
		</div>
		<div class="form-group">
			<label for="nom">Nom *</label>
			<input type="text" id="nom"  class="form-control" name="nom" value="<?= $datasFormVue['nom']; ?>" placeholder="Votre NOM. Ex: DUPONT">
		</div>
		<div class="form-group">
			<label for="prenom">Prénom *</label>
			<input type="text" id="prenom" class="form-control" name="prenom" value="<?= $datasFormVue['prenom']; ?>" placeholder="Votre Prénom. Ex: Jean" >	
		</div>
		<div class="form-group">
			<label for="adresse">Adresse *</label>
			<input type="text" id="adresse" class="form-control" name="adresse" value="<?= $datasFormVue['adresse']; ?>" placeholder="Votre adresse permanente" >
		</div>
		<div class="form-group">
			<label for="code_postal">Code postal *</label>
			<input type="int" id="code_postal" class="form-control" name="code_postal" value="<?= $datasFormVue['code_postal']; ?>" placeholder="75xxx" >
		</div>
		<div class="form-group">
			<label for="ville">Ville *</label>
			<input type="text" id="ville" class="form-control" name="ville" value="<?= $datasFormVue['ville']; ?>" placeholder="ex: Paris" >
		</div>
		<div class="form-group">
			<label for="email">E-mail *</label>
			<input type="text" id="email"  class="form-control"name="email" value="<?= $datasFormVue['email']; ?>" placeholder="Votre E-mail. Ex: jd@mail.com">
		</div>
<!-- 			<label for="commentaire">commentaire </label>
	<textarea name="commentaire" id="commentaire" value="< ?= $datasFormVue['commentaire']; ?>"></textarea> -->

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

		<label>Numéro de carte</label> </br>
		<input type="text" name="numerodecarte"> </br>

		<label>Code de sécurité</label> </br>
		<input type="text" name="codesecurite"> </br>

		<label>Date d'expiration</label> </br>
		<input type="text" name="expiration" placeholder="12/2019">  </br>	

	</fieldset>
	<input type="submit" class="btn btn-primary" name="envoi-reservation" value="Réservez">
</br>
</form>

<p>(* Attention: Tous les champs sont obligatoires.)</p>


<h3>Hôtel des Voisins</h3>
		<p>82 Avenue Denfert-Rochereau <br>75014 PARIS<br>FRANCE<br>notreadresse@email.com<br>Tél.: +33 (o)1 4234 5678<br>
		</p>

<?php

echo $confirmationVue;

?>

<?php $this->stop('main_content') ?>