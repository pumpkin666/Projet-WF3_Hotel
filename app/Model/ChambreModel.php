<?php

namespace Model;
use \W\Model\Model;
use \W\Model\ConnectionModel;
/**
 * Classe requise par l'AuthentificationModel, éventuellement à étendre par le UsersModel de l'appli
 */
class ChambreModel extends Model
{

	/**
	 * Constructeur
	 */
	public function __construct(){
		$app = getApp();
		// Définit la table en fonction de la config
		$this->setTable('chambres');

		$this->dbh = ConnectionModel::getDbh();
	}

	public function getAvailables() {

		$sql = 'SELECT * FROM '.$this->table.' WHERE statut = \'libre\'' ;

		$sth = $this->dbh->prepare($sql);

		if($sth->execute()){
	        $foundRoom = $sth->fetchAll();
	        return $foundRoom;
	    }

	    return false;
	}
}