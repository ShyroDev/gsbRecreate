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
        $lesCles =array_keys($lesFrais);

        foreach($lesCles as $unIdFrais)
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
}

?>

