<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ResaModel;

class BookingController extends Controller
{
	public function reservation1()
	{

		if (isset($_POST['envoi'])) 
		{
			$resaModel = new ResaModel();
			 // $chambre = $_POST['chambre'];
			$datepicker1_arrivee = $_POST['datepicker1_arrivee'];
			$datetimeArrivee = date_create_from_format('m/d/Y', $datepicker1_arrivee);
			$dateArriveeFormate = $datetimeArrivee->format('Y-m-d');

			$datepicker2_depart = $_POST['datepicker2_depart'];
			$datetimeDepart = date_create_from_format('m/d/Y', $datepicker2_depart);
			$dateDepartFormate = $datetimeDepart->format('Y-m-d');
			$availableRooms = $resaModel->displayAvailableRooms($dateDepartFormate, $dateArriveeFormate);

			$this->show('resa/reservation1-dispo', array('date_arrivee' => $datepicker1_arrivee, 'date_depart' => $datepicker2_depart));
		}
		else {
			$this->redirectToRoute('accueil-index');  // altern: 
		}

	}

	public function reservation2()
	{ // http://localhost/php/PROJET_hotel/public/resa/reservation2-formulaire
		// $confirmResaModel = $pdo->prepare('SELECT ...') ;

		$chambre = "";
		$prenom = "";
		$nom = "";
		$adresse = "";
		$code_postal = "";
		$ville = "";
		$email = "";
		$commentaire = "";
		$confirmation = "";
		$erreur = "";

		$datepicker1_arrivee = $_POST['datepicker1_arrivee'];
		$datepicker2_depart = $_POST['datepicker2_depart'];

		$resaModel = new ResaModel();

		$availableTypes = $resaModel->displayAvailableRooms($datepicker2_depart, $datepicker1_arrivee);
		if (isset($_POST['envoi-reservation'])) 
		{
		//	$chambre = $_POST['chambre'];
			$prenom = $_POST['prenom'];
			$nom = $_POST['nom'];
			$adresse = $_POST['adresse'];
			$code_postal = $_POST['code_postal'];
			$ville = $_POST['ville'];
			$email = $_POST['email'];
		//	$commentaire = $_POST['commentaire'];
			$confirmation = "<div class='confirmation'>La réservation de ". $_POST['prenom']." ".$_POST['nom']. " a bien été enregistrée.</div>";

			if (empty($_POST['nom']) OR empty($_POST['prenom']) OR empty($_POST['commentaire']) OR empty($_POST['email'])) // si Prénom, NOM, message, ou E-mail sont vides...
			{
				$erreur .= "<div class='erreur'>Tous les champs doivent être remplis.</div>"; //...cette erreur apparaît
			}
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // PHP vérifie la validité de l'E-mail 
			{
				$erreur .= "<div class='erreur'>Il nous faut une @dresse E-mail valide, svp...</div>"; 
			}
		
		}
	$datasForm = array(
		'datepicker1_arrivee' => $datepicker1_arrivee,
		'datepicker2_depart' => $datepicker2_depart,
		'chambre' => $chambre,
		'prenom' => $prenom,
		'nom' => $nom,
		'adresse' => $adresse,
		'code_postal' => $code_postal,
		'ville' => $ville, 
		'email' =>$email,
	//	'commentaire' => $commentaire,
		'confirmation' => $confirmation 
	);

	// $prenomFromDatasForm = $datasForm['prenom']
	// $this->show('default/contactez-nous',array(
	$this->show('resa/reservation2-formulaire', array(
		'erreurVue'=>$erreur, 
		'confirmationVue'=>$confirmation, 
		'datasFormVue' => $datasForm,
		'availableTypes' => $availableTypes
	));

	}

//--- Test à supprimer:	
	public function reservationtest()
	{
		$this->show('test-reservation');
	}
//-----
}




?>