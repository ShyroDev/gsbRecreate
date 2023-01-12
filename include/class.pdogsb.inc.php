<?php

	}
	public function _destruct(){
		PdoGsb::$monPdo = null;
	}

	
/**
 * Crée une nouvelle fiche de frais et les lignes de frais au forfait pour un visiteur et un mois donnés
 
 * récupère le dernier mois en cours de traitement, met à 'CL' son champs idEtat, crée une nouvelle fiche de frais
 * avec un idEtat à 'CR' et crée les lignes de frais forfait de quantités nulles 
 * @param $idVisiteur 
 * @param $mois sous la forme aaaamm
*/
	public function creeNouvellesLignesFrais($idVisiteur,$mois){

		$dernierMois = $this->dernierMoisSaisi($idVisiteur);

		$laDerniereFiche = $this->getLesInfosFicheFrais($idVisiteur,$dernierMois);

		if($laDerniereFiche['idEtat']=='CR'){

				$this->majEtatFicheFrais($idVisiteur, $dernierMois,'CL');
				
		}

		$req = "insert into FicheFrais(idVisiteur,mois,nbJustificatifs,montantValide,dateModif,idEtat) 
		values('$idVisiteur','$mois',0,0,now(),'CR')";

		

		PdoGsb::$monPdo->exec($req);

		$lesIdFrais = $this->getLesIdFrais();

		foreach($lesIdFrais as $uneLigneIdFrais){

			$unIdFrais = $uneLigneIdFrais['idfrais'];


			$req = "insert into LigneFraisForfait(idVisiteur,mois,idFraisForfait,quantite) 


			values('$idVisiteur','$mois','$unIdFrais',0)";
			PdoGsb::$monPdo->exec($req);
		 }
	}


}
?>