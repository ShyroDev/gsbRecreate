<?php

class LigneFraisHorsForfaitRepository 
{

    /**
    * Retourne sous forme d'un tableau associatif toutes les lignes de frais hors forfait
    * concernées par les deux arguments
 
     * La boucle foreach ne peut être utilisée ici car on procède
    * à une modification de la structure itérée - transformation du champ date-
 
    * @param $idVisiteur 
    * @param $mois sous la forme aaaamm
    * @return tous les champs des lignes de frais hors forfait sous la forme d'un tableau associatif 
    */
    public function getLesFraisHorsForfait(string $idVisiteur,string $mois) : array 
    {
        $HorsForfaitdata = ("SELECT * FROM LigneFraisHorsForfait WHERE LigneFraisHorsForfait.idVisiteur = ? 
        and LigneFraisHorsForfait.mois = ? ");	

        $connexion = Database::getConnexion();

        if(isset($connexion))
        {
            $HorsForfaitdata = $connexion->prepare($HorsForfaitdata);

            if($HorsForfaitdata !== false) 
            {
                $HorsForfaitdata->execute([$idVisiteur, $mois]);
                return $HorsForfaitdata->fetchAll(PDO::FETCH_ASSOC);
            }
               
        }

        return array();
    }


    /**
     * Crée un nouveau frais hors forfait pour un visiteur un mois donné
     * à partir des informations fournies en paramètre
    
     * @param $idVisiteur 
     * @param $mois sous la forme aaaamm
     * @param $libelle : le libelle du frais
     * @param $montant : le montant
    */
    public function creeNouveauFraisHorsForfait($idVisiteur, $mois, $libelle, $date, $montant) 
    {
        $fraisHorsForfaitData = ("INSERT INTO LigneFraisHorsForfait VALUES(?,?,?,?,?)");

        $connexion = Database::getConnexion();

        if(isset($connexion))
        {
            $fraisHorsForfaitData = $connexion->prepare($fraisHorsForfaitData);

            if($fraisHorsForfaitData !== false)
            {
                $fraisHorsForfaitData->execute([$idVisiteur, $mois, $libelle, $date, $montant]);
            }
        }
    }

    /**
     * Supprime le frais hors forfait dont l'id est passé en argument
    
     * @param $idFrais 
    */
    public function supprimerFraisHorsForfait(string $idFrais) 
    {
        $supprimerFraisHorsForfaitData = ("DELETE FROM LigneFraisHorsForfait WHERE LigneFraisHorsForfait.id = ? ");

        $connexion = Database::getConnexion();

        if(isset($connexion))
        {
            $supprimerFraisHorsForfaitData = $connexion->prepare($supprimerFraisHorsForfaitData);

            if($supprimerFraisHorsForfaitData !== false)
            {
                $supprimerFraisHorsForfaitData->execute([$idFrais]);
            }
        }
    }


}

?>



