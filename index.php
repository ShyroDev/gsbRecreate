<?php

include("include/fct.inc.php");
require("vues/header.php");
require("models/database.php");

$invoc = Database::init();


switch($uc){
	case 'connexion':{

		include("controleurs/connexion.php");break;
	}
	case 'gererFrais' :{


		include("controleurs/gererFrais.php");break;
	}
	case 'etatFrais' :{

		include("controleurs/etatFrais.php");break; 
	}
	default: {

		include("vues/footer.php") ;
	}
}

class Main 
{
	private static bool $premiereFois = false;
	
	public static function init(): void
	{
		if(Main::$premiereFois)
		{
			Database::init();
			Main::$premiereFois = true;
		}
	}
}


Main::init();
session_start();

if(isset($_POST["connexion"]) && !empty($_POST["connexion"]))
{
	if(isset($_POST["connexion"]) === "demandeConnexion")
	{
		if (isset($_SESSION['idVisiteur']) || !empty($_SESSION["idVisiteur"]))
		{
			Routes::versPageConnexion();
		}
		else 
		{
			Routes::versPageAccueil();
		}
	}
	else 
	{
		Routes::versPageAccueil();
	}
}




$estConnecte = estConnecte();





if(!isset($_REQUEST['uc']) || !$estConnecte)
{
     $_REQUEST['uc'] = 'connexion';
}	 

$uc = $_REQUEST['uc'];


?>

