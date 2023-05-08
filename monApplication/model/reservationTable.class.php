<?php

// Inclusion de la classe reservation
require_once "reservation.class.php";

class reservationTable {

	
  	public static function getReservationByVoyage($voyage) 
	{
		$em = dbconnection::getInstance()->getEntityManager() ;

			$reservationRepository = $em->getRepository('reservation');

			$reservation = $reservationRepository->findBy(array('voyage' => $voyage));	
	
	if ($reservation == false){
		echo 'Erreur sql';
			   }
	return $reservation;  
	}




	public static function addReservation($voyage,$user,$places)
	{
		
		
		for($i = 0 ; $i < $places ; $i++){

		$em = dbconnection::getInstance()->getEntityManager();

		$reservation = new reservation();
		
		
		$reservation->voyage = 	 voyageTable::getVoyageById(intval($voyage));
		$reservation->voyageur = utilisateurTable::getUserById(intval($user));

		$em->persist($reservation);
		$em->flush();

	}
	}






	public static function getReservationsByUser($user) {



		$em = dbconnection::getInstance()->getEntityManager() ;

			$reservationRepository = $em->getRepository('reservation');

			$reservation = $reservationRepository->findBy(array('voyageur' => $user));	
	
	if ($reservation == false){
		echo 'Erreur sql';
			   }
	return $reservation; 



	}



















	}

?>