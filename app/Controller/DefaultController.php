<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */

	// PROJET_hotel/app/Views/default

	public function accueil()
	{
		$this->show('default/accueil-index');
	}

	public function chambreSimple()
	{
		$this->show('default/chambres-simples');
	}

	public function chambreDouble()
	{
		$this->show('default/chambres-doubles');
	}

	public function chambreTriple()
	{
		$this->show('default/chambres-triples');
	}

	public function chambreSuite()
	{
		$this->show('default/suites');
	}


/*	public function home()
	{
		$this->show('default/home');
	}
*/	
//* ------ Tests à supprimer :	
	public function test()
	{
		$maVariable = 'Coucou';
		$this->show('default/test', array('maVariablePasseeALaVue' => $maVariable));
	}
	public function testReservation()
	{
		$this->show('default/test-reservation'); 
		// URL= http://localhost/php/PROJET_hotel/public/test-reservation
	}
	public function pageAzerty()
	{
		$this->show('default/pageAzerty');
	}
//* --------------/

	public function contact()
	{
// http://localhost/php/PROJET_hotel/public/contactez-nous
		$prenom = "";
		$nom = "";
		$email = "";
		$message = "";
		$confirmation = "";
		$erreur = "";
		

		if (isset($_POST['envoi'])) 
		{
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$confirmation = "<div class='confirmation'>Le message de ". $_POST['prenom']." ".$_POST['nom']. " a bien été envoyé.</div>";

		if (empty($_POST['nom']) OR empty($_POST['prenom']) OR empty($_POST['message']) OR empty($_POST['email'])) // si Prénom, NOM, message, ou E-mail sont vides...
		{
			$erreur .= "<div class='erreur'>Tous les champs doivent être remplis.</div>"; //...cette erreur apparaît
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // vérifie la validité de l'E-mail, trop fort le PHP!
		{
			$erreur .= "<div class='erreur'>Il nous faut une @dresse E-mail valide, svp...</div>"; 
		}
		
	}
	$datasForm = array(
		'prenom' => $prenom,
		'nom' => $nom,
		'email' =>$email,
		'message' => $message
		);

	// $prenomFromDatasForm = $datasForm['prenom']

	$this->show('default/contactez-nous',array(
		'erreurVue'=>$erreur, 
		'confirmationVue'=>$confirmation, 
		'datasFormVue' => $datasForm,
		));
	}

	public function messageviacontactpage()
	{
		echo "Nous avons bien reçu votre message ci-dessous. Nous allons vous répondre dès que possible." . "<br>";
		//echo "<pre>";print_r($_POST);echo "</pre>";
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

	}

	public function chambres() 
	{
		$chambreModel = new \Model\ChambreModel();
		var_dump($chambreModel->getAvailables());
	}
		public function detailchambres() 
	{
		$this->show('chambres/...');
	}
/*	public function testcss()
	{
		$this->show('/z/css-test');
	}*/

}

