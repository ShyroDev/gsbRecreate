<?php

class LigneFraisForfaitRepository
{

    /**
    * Met à jour la table ligneFraisForfait
    
    * Met à jour la table ligneFraisForfait pour un visiteur et
    * un mois donné en enregistrant les nouveaux montants
    
    * @param $idVisiteur 
    * @param $mois sous la forme aaaamm
    * @param $lesFrais tableau associatif de clé idFrais et de valeur la quantité pour ce frais
    * @return un tableau associatif 
    */
    public function majFraisForfait(string $idVisiteur,string $mois, $lesFrais) : array
    {

        foreach($lesFrais as $unIdFrais)
        {
            $qte = $lesFrais[$unIdFrais];

            $majFraisForfaitData = ("UPDATE LigneFraisForfait SET LigneFraisForfait.quantite = ?
            WHERE LigneFraisForfait.idVisiteur = ? AND LigneFraisForfait.mois = ?
            AND LigneFraisForfait.idFraisForfait = ?");

            $connexion = Database::getConnexion();

            if(isset($connexion))
            {
                $majFraisForfaitData = $connexion->prepare($majFraisForfaitData);

                if($majFraisForfaitData !== false) 
                {
                    $majFraisForfaitData->execute([$qte, $idVisiteur, $mois, $unIdFrais]);
                    return $majFraisForfaitData->fetchAll(PDO::FETCH_ASSOC);
                }
            }

        }

        return array();
    }

    public static function creeNouvelleLigne(LigneFraisForfait $ligneFraisForfait)
    {
        $requete = ("INSERT INTO LigneFraisForfait(idVisiteur,mois,idFraisForfait,quantite)VALUES(?,?,?,?)");

            $connexion = Database::getConnexion();

            if(isset($connexion))
            {
                $requete = $connexion->prepare($requete);

                if($requete !== false)
                {
                    return $requete->execute([$ligneFraisForfait->getIdVisiteur(), $ligneFraisForfait->getMois(), 
                    $ligneFraisForfait->getQuantite(),$ligneFraisForfait->getFicheFrais(), $ligneFraisForfait->getFraisForfait()]);

                }
            }
    }

    public function nouvelleLigne(string $idVisiteur,string $mois) : void
    {

        $dernierMois = FicheFraisRepository::dernierMoisSaisi($idVisiteur);                                           
        $laDerniereFiche = FicheFraisRepository::getLesInfosFicheFrais($idVisiteur,$dernierMois);     


        if($laDerniereFiche['idEtat'] == 'CR') 
        {
                FicheFraisRepository::majEtatFicheFrais($idVisiteur, $dernierMois,'CL');			
        }


        $ficheFrais = new FicheFrais();
        $ficheFrais->setIdVisiteur($idVisiteur)->setMois(new DateTime($mois), 0, 0, new DateTime(), "CR");
        FicheFraisRepository::creeFicheFrais($ficheFrais);

        $lesIdFrais = FraisForfaitRepository::getLesIdFrais();


        foreach($lesIdFrais as $uneLigneIdFrais)
        {
            $unIdFrais = $uneLigneIdFrais['idfrais'];

            $ligneFraisForfait = new LigneFraisForfait();
            $ligneFraisForfait->setIdVisiteur($idVisiteur)->setMois(new DateTime())->setFraisForfait($unIdFrais)->setQuantite(0);

            LigneFraisForfaitRepository::creeNouvelleLigne($ligneFraisForfait);
        }
					
    }
}

?>




