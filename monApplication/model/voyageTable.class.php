<?php

// Inclusion de la classe voyage
require_once "voyage.class.php";

class voyageTable {

	
  	// public static function getVoyagesByTrajet($trajet) 
	// {
	// 	$em = dbconnection::getInstance()->getEntityManager() ;

	// 		$voyageRepository = $em->getRepository('voyage');

	// 		$voyage = $voyageRepository->findBy(array('trajet' => $trajet),array('heureDepart' => 'ASC'));	
	
	// if ($voyage == false){
	// 	echo 'Erreur sql';
	// 		   }
	// return $voyage;  
	// }

	


public static function getVoyagesByTrajet($trajet,$places) 
	{
		$em = dbconnection::getInstance()->getEntityManager();

		$voyageRepository = $em->getRepository('voyage');

		$voyage = $voyageRepository->findBy(array('trajet' => $trajet),array('heureDepart' => 'ASC'));	

		if ($voyage == false){
			echo 'Erreur sql';
				   }

		$i = 0;



		foreach ($voyage as $v) {

			
			$PlacesTotal = $v->nbPlace;


		// Récupère le nombre de places déjà réservé pour ce voyage
		$reservationRepository = $em->getRepository('reservation');
		$reservation = $reservationRepository->findBy(array('voyage' => $v->id));
		$PlacesReserve = count($reservation);

	
		$nbrPlaceRes = $PlacesTotal - $PlacesReserve;

			// Le supprimer si celui-ci n'a pas de place disponible
			if ($nbrPlaceRes < $places) {	
				unset($voyage[$i]);	
			}

			$i++;
		}

		return $voyage; 
	}


	public static function getVoyageById($id) 
	{
		$em = dbconnection::getInstance()->getEntityManager();

		$voyageRepository = $em->getRepository('voyage');
		$voyage = $voyageRepository->findOneBy(array('id' => $id));

		return $voyage; 
	}


	public static function addVoyage($user ,$depart, $arrivee, $tarif, $nbplaces, $heuredrp, $contraintes) {
		$em = dbconnection::getInstance()->getEntityManager();

		

		$voyage = new voyage();

		$voyage->conducteur = utilisateurTable::getUserById(intval($user));


		$voyage->trajet = trajetTable::getTrajet($depart,$arrivee);

		if (!isset($voyage->trajet)) {
			return false;
		}

		$voyage->tarif = $tarif;
		$voyage->nbPlace = $nbplaces;
		$voyage->heureDepart = $heuredrp;
		$voyage->contraintes = $contraintes;

		$em->persist($voyage);
		$em->flush();

		return true;
	}



}




?>