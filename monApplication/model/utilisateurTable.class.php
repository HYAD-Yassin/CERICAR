<?php
// Inclusion de la classe utilisateur
require_once "utilisateur.class.php";

class utilisateurTable {

  public static function getUserByLoginAndPass($login,$pass)
	{
  	$em = dbconnection::getInstance()->getEntityManager() ;

	$userRepository = $em->getRepository('utilisateur');
	$user = $userRepository->findOneBy(array('identifiant' => $login, 'pass' => sha1($pass)));	
	
	if ($user == false){
		echo 'Erreur sql';
			   }
	return $user; 
	}


	public static function getUserById($id) 
	{
		$em = dbconnection::getInstance()->getEntityManager() ;

			$userRepository = $em->getRepository('utilisateur');

			$user = $userRepository->findOneById($id);	
	
	if ($user == false){
		echo 'Erreur sql';
			   }
	return $user;  
	}
 
	public static function ajouterUser($nom,$prenom,$pseudo,$password) {
		$em = dbconnection::getInstance()->getEntityManager();

		$utilisateur = new utilisateur();

		$utilisateur->nom = $nom;
		$utilisateur->prenom = $prenom;
		$utilisateur->identifiant = $pseudo;
		$utilisateur->pass = $password;
		

		$em->persist($utilisateur);
		$em->flush();
	}

}



  


?>
