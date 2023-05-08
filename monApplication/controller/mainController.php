<?php

class mainController
{

	public static function helloWorld($request,$context)
	{
		$context->mavariable="hello world";
		return context::SUCCESS;
	}


	public static function superTest($request,$context)
	{
		
		$context->param1=$request['param1'];
		$context->param2=$request['param2'];
		return context::SUCCESS;

		
	}









	public static function index($request,$context){
		
		return context::SUCCESS; 
	}


public static function testModel($request,$context){


		$context->user= utilisateurTable::getUserById(2);

		$context->trajet=trajetTable::getTrajet("Paris","Lyon");

		$context->voyage= voyageTable::getVoyagesByTrajet($context->trajet->id);
		
		$context->reservation= reservationTable::getReservationByVoyage(2);

		return context::SUCCESS;
	}


	



	public static function rechercheVoyage($request,$context){

		$trajet= trajetTable::getTrajet($request["départ"],$request["arrivée"]);



		$context->setSessionAttribute('nbplaces11', $request["nb_places"] );
		
		
	
		if($trajet == null){
	
			return context::NONE;
	
		}else{
		$context->voyage = voyageTable::getVoyagesByTrajet($trajet->id,$request["nb_places"]);
		
	
			return context::SUCCESS;
		}
	
	
		}



		
	public static function reservations($request,$context) {

	

		if($_SESSION["user_id"] != NULL){

			$context->user = utilisateurTable::getUserById($_SESSION["user_id"]);

		

			$context->allReservation = reservationTable::getReservationsByUser($context->user);
	
			return context::SUCCESS;


	
			
		}else{
	
			return context::NONE;
	

		}
	
	}








	public static function ajouterUtilisateur($request,$context) {

		if (isset($_POST["nom"]) &&isset($_POST["prenom"]) &&
			isset($_POST["pseudo"]) &&isset($_POST["password"])
		) {
			
			utilisateurTable::ajouterUser($_POST["nom"],$_POST["prenom"],
			$_POST["pseudo"],sha1($_POST["password"])
			);

			return context::SUCCESS;
		} else {
			return context::ERROR;
		}

	}
	

	public static function seconnecter($request,$context) {

		if (isset($_POST["pseudo"]) && isset($_POST["password"])) {
			
		
			$pseudo = $_POST["pseudo"];
			$password = $_POST["password"];

			$user = utilisateurTable::getUserByLoginAndPass($pseudo, $password);
			$context->user = $user;
		
			if ($user) {
				$context->setSessionAttribute('user_id', $user->id);
				$context->setSessionAttribute('user_login', "Bienvenue M.".$user->identifiant);

				return context::SUCCESS;

				
			} else {
				return context::ERROR;
			}

		} 
			

	}



 	public static function Reserver($request,$context) {

		if (isset($_POST["voyage_id"] )&& $_SESSION["user_id"] != null) {

		$userId = $_SESSION["user_id"];

		

			
		reservationTable::addReservation($_POST["voyage_id"],$userId,$_SESSION["nbplaces11"]);

		return context::SUCCESS;

	} else {
		return context::ERROR;
	}
		
	}


	public static function Proposer($request,$context) {

		$userId = NULL;

		if (isset($_SESSION["user_id"]) ){
		$userId = $_SESSION["user_id"];
		}


		if (isset($_POST["départ"]) &&isset($_POST["arrivée"]) &&
		isset($_POST["tarif"]) &&isset($_POST["nbplace"] ) &&
		isset($_POST["heuredpr"]) &&isset($_POST["contraintes"]) && isset($userId) )
		{

		voyageTable::addVoyage($userId, $_POST["départ"] , $_POST["arrivée"] ,
		$_POST["tarif"] , $_POST["nbplace"] ,$_POST["heuredpr"] , $_POST["contraintes"]);

		return context::SUCCESS;
		 

		} else {
		return context::ERROR;
		}
		
	}



}










