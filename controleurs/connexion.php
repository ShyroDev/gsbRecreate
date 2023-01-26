<?php

if(!empty($_POST))
{
	if(empty($_POST["idVisiteur"] && empty("password")))
	{
	}
}

if(!isset($_REQUEST['action']))
{
	$_REQUEST['action'] = 'demandeConnexion';
}



$action = $_REQUEST['action'];




switch($action)
{

	case 'demandeConnexion':
		{

			include("../vues/Utilisateur/connexion.php");
			break;

		}

	case 'valideConnexion':
		{
			
			$login = $_REQUEST['login'];
			$mdp = $_REQUEST['mdp'];
			$visiteur = $pdo->getInfosVisiteur($login,$mdp);


			if(!is_array( $visiteur))
			{

				ajouterErreur("Login ou mot de passe incorrect");
				include("../vues/erreurs.php");
				include("../vues/Utilisateur/connexion.php");

			}

			else
			{

				$id = $visiteur['id'];
				$nom =  $visiteur['nom'];
				$prenom = $visiteur['prenom'];
				connecter($id,$nom,$prenom);
				include("../vues/Pages/sommaire.php");

			}


		break;
		}



	default :
	{
		include("../vues/Utilisateur/connexion.php");
		break;
	}


}
?>