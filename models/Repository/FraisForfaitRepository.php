<?php

class FraisForfaitRepository 
{	
	/**
	* Retourne sous forme d'un tableau associatif toutes les lignes de frais au forfait
	* concernées par les deux arguments
	
	* @param $idVisiteur 
	* @param $mois sous la forme aaaamm
	* @return l'id, le libelle et la quantité sous la forme d'un tableau associatif 
	*/
	 public function getLesFraisForfait(string $idVisiteur,string $mois)
	 {	
	     $fraisForfaitData = ("SELECT FraisForfait.id AS id, FraisForfait.libelle AS libelle, 
		LigneFraisForfait.quantite AS quantite FROM LigneFraisForfait INNER JOIN FraisForfait 
		ON FraisForfait.id = LigneFraisForfait.idFraisForfait
		WHERE LigneFraisForfait.idVisiteur = ? AND LigneFraisForfait.mois= ? 
		ORDER BY LigneFraisForfait.idFraisForfait");	
		$connexion = Database::getConnexion();	
		if(isset($connexion)) 
		{
			$fraisForfaitData = $connexion->prepare($fraisForfaitData);	
			if($fraisForfaitData !== false) 
	         {
	             $fraisForfaitData->execute([$idVisiteur, $mois]);
	             return $fraisForfaitData->fetchAll(PDO::FETCH_ASSOC);
	         }
		}
		
	 }
	 	
	/**
	* Retourne tous les id de la table FraisForfait
 
	* @return un tableau associatif 
	*/
	public function getLesIdFrais() : array
	{
		$idFraisForfaitData = ("SELECT FraisForfait.id AS idfrais FROM FraisForfait ORDER BY FraisForfait.id");	
		$connexion = Database::getConnexion();	
		if(isset($connexion))
		{
			$idFraisForfaitData = $connexion->prepare($idFraisForfaitData);	
			if($idFraisForfaitData !== false)
			{
				return $idFraisForfaitData->fetchAll(PDO::FETCH_ASSOC);
			}
		}
		
		return array();
	}	
	/**
	* Teste si un visiteur possède une fiche de frais pour le mois passé en argument
	* @param $idVisiteur 
	* @param $mois sous la forme aaaamm
	* @return vrai ou faux 
	*/	
	public static function estPremierFraisMois(string $idVisiteur,string $mois)
	{	
		$countVisiteurFicheFraisData = ("SELECT COUNT(*) AS nblignesfrais FROM FicheFrais 
		WHERE FicheFrais.mois = ? AND FicheFrais.idVisiteur = ?");	
		$ok = false;	
		$connexion = Database::getConnexion();	
		if(isset($connexion))
		{
			$countVisiteurFicheFraisData = $connexion->prepare($countVisiteurFicheFraisData);	
			if($countVisiteurFicheFraisData !== false)
			{
				$countVisiteurFicheFraisData->execute([$idVisiteur, $mois]);	
				$laLigne = $countVisiteurFicheFraisData->fetch(PDO::FETCH_ASSOC);	
				if($laLigne['nblignesfrais'] == 0){
					$ok = true;
				}
				return $ok;
			}	
		}
	}	
}

?>




