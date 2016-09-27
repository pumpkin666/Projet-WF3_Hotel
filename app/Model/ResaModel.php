<?php

namespace Model;
use \W\Model\Model;
use \W\Model\ConnectionModel;
/**
 * Classe requise par l'AuthentificationModel, éventuellement à étendre par le UsersModel de l'appli
 */
class ResaModel extends Model
{
	public function displayAvailableRooms($date_depart, $date_arrivee){
		$PDO = $this->dbh;
		$query = $PDO->prepare
		("SELECT *, CONCAT(categorie,'/',capacite) as type FROM `chambres` WHERE id_chambre NOT IN (SELECT id_chambre FROM `clientele` WHERE (date_arrivee BETWEEN :datepicker1_arrivee AND :datepicker2_depart) OR (date_depart BETWEEN :datepicker1_arrivee AND :datepicker2_depart)) GROUP BY type"
		); 

		$query -> bindValue(':datepicker1_arrivee', $date_arrivee );
		$query -> bindValue(':datepicker2_depart', $date_depart);
	//	$query -> bindParam(':id_chambre', $_POST['id_chambre'], PDO::PARAM_INT); // INT  entier
		$query -> execute();
		$result = $query -> fetchAll();
		return $result;
	//	$_GET['action'] = 'affichage';
	}

	public function confirmResa2(){
		$row = array();
		$row["date_reservation"] = 
		$this->insert($row);
	}

	public function confirmResa() {

		$query = $PDO->prepare("INSERT INTO `clientele`(`date_reservation`, `date_arrivee`, `date_depart`, `id_chambre`, `id_client`, `civilite`, `nom`, `prenom`, `adresse`, `code_postal`, `ville`, `pays`, `telephone`, `E-mail`) VALUES (:date_reservation, :datepicker1_arrivee, :datepicker2_depart, :id_chambre, :id_client, :civilite, :nom, :prenom, :adresse, :code_postal, :ville, :pays, :telephone, :email)" );

/*		$resultat = $pdo -> prepare("INSERT INTO produit (reference, categorie, titre, description, couleur, taille, public, photo, prix, stock) VALUES (:reference, :categorie, :titre, :description, :couleur, :taille, :public, :photo, :prix, :stock)");

Sélection des Chambres par catégorie + capacité

SELECT *, CONCAT(categorie, capacite) as conc FROM `chambres` GROUP BY conc
	}*/

	$query -> bindValue(':date_reservation', $_POST['date_reservation'], PDO::PARAM_STR);
	$query -> bindValue(':datepicker1_arrivee', $_POST['datepicker1_arrivee'], PDO::PARAM_STR);
	$query -> bindValue(':datepicker2_depart', $_POST['datepicker2_depart'], PDO::PARAM_STR);
	$query -> bindValue(':id_chambre', $_POST['id_chambre'], PDO::PARAM_INT); // INT  entier
	$query -> bindValue(':id_client', $_POST['id_client'], PDO::PARAM_INT);
	$query -> bindValue(':civilite', $_POST['civilite'], PDO::PARAM_STR);
	$query -> bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
	$query -> bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
	$query -> bindValue(':adresse', $_POST['adresse'], PDO::PARAM_STR);
	$query -> bindValue(':code_postal', $_POST['code_postal'], PDO::PARAM_STR);
	$query -> bindValue(':ville', $_POST['ville'], PDO::PARAM_STR);
	$query -> bindValue(':pays', $_POST['pays'], PDO::PARAM_STR);
	$query -> bindValue(':telephone', $_POST['telephone'], PDO::PARAM_STR);
	$query -> bindValue(':email', $_POST['email'], PDO::PARAM_STR);
	//-----
/*	$resultat -> bindParam(':', $_POST[''], PDO::PARAM_STR);
	$resultat -> bindParam(':prix', $_POST['prix'], PDO::PARAM_INT); // INT  entier
	$resultat -> bindParam(':stock', $_POST['stock'], PDO::PARAM_INT); // INT entier */

	$query -> execute();
	$_POST['action'] = 'insertion';

	}
}		
	/*	$req->execute(array(
            "date_reservation" => $date_reservation,
			"datepicker1_arrivee" => $datepicker1_arrivee,
			"datepicker2_depart" => $datepicker2_depart,
			"id_chambre" => $id_chambre,
			"id_client" => $id_client,
			"civilite" => $civilite,
			"nom" => $nom,
			"prenom" => $prenom,
			"adresse" => $adresse,
			"code_postal" => $code_postal,
			"ville" => $ville,
			"pays" => $pays,
			"telephone" => $telephone,
			"e-mail" => $email
            ));*/
		
		/*$sth = $this->dbh->prepare($pdo);

		if($sth->execute()){
	        $foundRoom = $sth->fetchAll();
	        return $foundRoom;
	    }

	    return false;*/

/*
$_POST['date_reservation']
$_POST['datepicker1_arrivee']
$_POST['datepciker2_depart']
$_POST['id_chambre']
$_POST['id_client']
$_POST['civilite']
$_POST['nom']
$_POST['prenom']
$_POST['adresse']
$_POST['code_postal']
$_POST['ville']
$_POST['pays']
$_POST['telephone']
$_POST['e-mail']
*/




?>