<?php 

require("include/fct.inc.php");
require("include/class.pdogsb.inc.php");
include("vues/v_entete.php") ;

$invoc = Database::init();


switch($uc){
	case 'connexion':{

		include("controleurs/c_connexion.php");break;
	}
	case 'gererFrais' :{

		include("controleurs/c_gererFrais.php");break;
	}
	case 'etatFrais' :{

		include("controleurs/c_etatFrais.php");break; 
	}
	default: {

		include("vues/v_pied.php") ;
	}
}

?>