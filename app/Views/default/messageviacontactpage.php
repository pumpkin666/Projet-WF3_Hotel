<?php $this->layout('layout', ['title' => 'Hôtel des Voisins: Votre message']) ?>

<?php $this->start('main_content') ?>
<h2>Message posté </h2>
	<p>- Merci pour votre demande...</p>

<?php
/*
echo "<pre>";print_r($_POST);echo "</pre>";
if($_POST) 
	{   			
			echo "Nom: ". $_POST['nom']. "<br>";
			echo "Prénom: ". $_POST['prenom']. "<br>";
			echo "E-mail: ". $_POST['email']. "<br>";
		//	echo "Sujet: ". $_POST['sujet']. "<br>";
			echo "Message: ". $_POST['message']. "<br>";

			$f = fopen("messageviacontactpage.txt" , "a");
				// fopen()"a" permet de créer le fichier txt (si non existant) et l'ouvre 
			fwrite($f , $_POST['nom']. " : ");
			// fwrite() pour écrire ds le fichier représenté par $f
			fwrite($f , $_POST['email']. " \n"); // \n = saut de ligne .txt
			fwrite($f , $_POST['prenom']. " \n");
		//	fwrite($f , $_POST['sujet']. " \n");
			fwrite($f , $_POST['message']. " \n"); 
			$f = fclose($f);
	}	// fclose :facultatif, libère de la RAM	
*/

//echo "Nous avons bien reçu votre message ci-dessus. Quelqu'un vous répondra dès que possible.";	
?>

<?php $this->stop('main_content') ?>