<?php 

class FicheFraisRepository 
{
     /**
    * Retourne les informations d'un visiteur

    * Retourne le nombre de justificatif d'un visiteur pour un mois donné
 
    * @param $idVisiteur 
    * @param $mois sous la forme aaaamm
    * @return nombre entier de justificatifs 
    */
    public function getNbJustificatifs(string $idVisiteur,string $mois) 
    {
        $nombreJustificatifs = ("SELECT FicheFrais.nbJustificatifs as nb FROM  FicheFrais WHERE FicheFrais.idVisiteur = ? and FicheFrais.mois = ?");

        $connexion = Database::getConnexion();

        if(isset($connexion))
        {
            $nombreJustificatifs = $connexion->prepare($nombreJustificatifs);

            if($nombreJustificatifs !== false) 
            {
                $nombreJustificatifs->execute([$idVisiteur, $mois]);
                return $nombreJustificatifs->fetch(PDO::FETCH_ASSOC);
            }
        }
    }



    /**
     * met à jour le nombre de justificatifs de la table ficheFrais
     * pour le mois et le visiteur concerné
    
     * @param $idVisiteur 
     * @param mois sous la forme aaaamm
    */
    public function majNbJustificatifs(string $idVisiteur,string $mois,int $nbJustificatifs) 
    {
        $majNombreJustificatifsData = ("UPDATE FicheFrais SET nbJustificatifs = ? 
        WHERE FicheFrais.idVisiteur = ? AND FicheFrais.mois = ?");

        $connexion = Database::getConnexion();

        if(isset($connexion))
        {
            $majNombreJustificatifsData = $connexion->prepare($majNombreJustificatifsData);

            if($majNombreJustificatifsData !== false)
            {
                $majNombreJustificatifsData->execute([$nbJustificatifs, $idVisiteur, $mois]);
                return $majNombreJustificatifsData->fetchAll(PDO::FETCH_ASSOC);
            }
        }
    }


    /**
     * Retourne le dernier mois en cours d'un visiteur
    
     * @param $idVisiteur 
     * @return mois sous la forme aaaamm
    */
    public static function dernierMoisSaisi(string $idVisiteur) : string 
    {

        $maximumMois = ("SELECT MAX(mois) AS dernierMois FROM FicheFrais WHERE FicheFrais.idVisiteur = ?");

        $connexion = Database::getConnexion();

        if(isset($connexion))
        {
            $maximumMois = $connexion->prepare($maximumMois);

            if($maximumMois !== false)
            {
                $maximumMois->execute([$idVisiteur]);
                return $maximumMois->fetch(PDO::FETCH_ASSOC)["dernier mois"];
            }

        }

        return "";
    }


    /**
     * Retourne les mois pour lesquel un visiteur a une fiche de frais
    
     * @param $idVisiteur 
     * @return un tableau associatif de clé un mois -aaaamm- et de valeurs l'année et le mois correspondant 
    */
    public function getLesMoisDisponibles(string $idVisiteur) : array
    {
        $moisDisponibles = ("SELECT FicheFrais.mois AS mois FROM  FicheFrais WHERE FicheFrais.idVisiteur = ? ORDER BY FicheFrais.mois DESC");


        $connexion = Database::getConnexion();

        if(isset($connexion))
        {
            $moisDisponibles = $connexion->prepare($moisDisponibles);

            if($moisDisponibles !== false) 
            {
                $moisDisponibles->execute([$idVisiteur]);
                $listeMois = $moisDisponibles->fetch(PDO::FETCH_NUM);

                for($i =  0;$i < count($listeMois); $i++)
                {
                    if($listeMois[$i] !== null)
                    {
                        $listeMois[$i] = new DateTime($listeMois[$i]);
                    }
                }

                return $listeMois;
            }
        }

        return array();
    }


    /**
     * Retourne les informations d'une fiche de frais d'un visiteur pour un mois donné
    
     * @param $idVisiteur 
     * @param $mois sous la forme aaaamm
     * @return un tableau avec des champs de jointure entre une fiche de frais et la ligne d'état 
    */	
    public static function getLesInfosFicheFrais($idVisiteur, $mois)  : array
    {
        $infoFicheFraisData = ("SELECT FicheFrais.idEtat AS idEtat, FicheFrais.dateModif AS dateModif, FicheFrais.nbJustificatifs AS nbJustificatifs, 
        FicheFrais.montantValide AS montantValide, Etat.libelle AS libEtat FROM  FicheFrais INNER JOIN Etat ON FicheFrais.idEtat = Etat.id 
        WHERE FicheFrais.idVisiteur = ? AND FicheFrais.mois = ?");

        $connexion = Database::getConnexion();

        if(isset($connexion))
        {
            $infoFicheFraisData = $connexion->prepare($infoFicheFraisData);

            if($infoFicheFraisData !== false)
            {
                $infoFicheFraisData->execute([$idVisiteur, $mois]);
                return $infoFicheFraisData->fetch(PDO::FETCH_ASSOC);
            }
        }

        return array();
    }


    /**
    * Modifie l'état et la date de modification d'une fiche de frais

    * Modifie le champ idEtat et met la date de modif à aujourd'hui
    * @param $idVisiteur 
    * @param $mois sous la forme aaaamm
    */
    public static function majEtatFicheFrais($idVisiteur, $mois, $etat) 
    {
        $majEtatFicheFraisData = ("UPDATE FicheFrais SET idEtat = ?, dateModif = NOW() 
		WHERE FicheFrais.idVisiteur = ? AND FicheFrais.mois = ?");

        $connexion = Database::getConnexion();

        if(isset($connexion))
        {
            $majEtatFicheFraisData = $connexion->prepare($majEtatFicheFraisData);

            if($majEtatFicheFraisData !== false) 
            {
                $majEtatFicheFraisData->execute([$idVisiteur, $mois, $etat]);
            }
        }
    }



    public static function creeFicheFrais(FicheFrais $ficheFrais) : bool
    {       

            $requete = ("INSERT INTO FicheFrais(idVisiteur,mois,nbJustificatifs,montantValide,dateModif,idEtat)VALUES(?,?,?,?,?,?");

            $connexion = Database::getConnexion();

            if(isset($connexion))
            {                
                $requete = $connexion->prepare($requete);

                if ($requete !== false)
                {
                    return $requete->execute([$ficheFrais->getIdVisiteur(), $ficheFrais->getMois(), 
                    $ficheFrais->getNbJustificatifs(), $ficheFrais->getMontantValide(), 
                    $ficheFrais->getDateModif(), $ficheFrais->getEtat()]);
                }
            }
 
    }

}


?>
