<?php 

class LigneFraisForfait 
{
    private string $idVisiteur;
    private DateTime $mois;
    private int $quantite;
    private FicheFrais $ficheFrais;
    private FraisForfait $fraisForfait;
    private LigneFraisForfait $ligneFraisForfait;


    public function __construct()
    {

    }


    /**
     * Permet d'obtenir l'identifiant visiteur
     * 
     * @return string
     */
    public function getIdVisiteur() : string 
    {
        return $this->idVisiteur;
    }

    /**
     * Permet de définir l'identifiant visiteur 
     * 
     * @param string $idVisteur
     * 
     * @return LigneFraisForfait
     */
    public function setIdVisiteur(string $idVisiteur)  : LigneFraisForfait
    {
        if(!empty($idVisiteur))
        {
            $this->idVisiteur = $idVisiteur;
        }

        return $this;
    }

    /**
     * Permet d'obtenir le mois 
     * 
     * @return DateTime 
     */
    public function getMois() : DateTime 
    {
        return $this->mois;
    }

    /**
     * Permet de définir le mois
     * 
     * @param DateTime $mois
     * 
     *@return 
     */
    public function setMois(DateTime $mois)  : LigneFraisForfait
    {
        if(!empty($mois))
        {
            $this->mois = $mois;
        }

        return $this;
    }

    /**
     * Permet d'obtenir la quantité 
     * 
     * @return int 
     */
    public function getQuantite() : int 
    {
        return $this->quantite;
    }

    /**
     * Permet de définir la quantité 
     * 
     * @param int $quantite
     * 
     * @return void 
     */
    public function setQuantite(int $quantite) : void 
    {
        $this->quantite = $quantite;
    }

    /**
     * Permet d'obtenir la classe FicheFrais
     * 
     * @return FicheFrais 
     */
    public function getFicheFrais() : FicheFrais 
    {
        if (isset($this->ficheFrais))
        {
            return $this->ficheFrais;
        }
    }

    /**
     * Permet de définir la classe FicheFrais
     * 
     * @param FicheFrais $ficheFrais
     * 
     * @return void 
     */
    public function setFicheFrais(FicheFrais $ficheFrais) : void 
    {
        $this->ficheFrais = $ficheFrais;
    }


    /**
     * Permet d'obtenir la classe FraisForfait
     * 
     * @return FraisForfait
     */
    public function getFraisForfait() : FraisForfait 
    {
        if (isset($this->fraisForfait))
        {
            return $this->fraisForfait;
        }
    }

    /**
     * Permet de définir la classe FraisForfait 
     * 
     * @param FraisForfait $fraisForfait 
     * 
     * @return LigneFraisForfait 
     */
    public function setFraisForfait(FraisForfait $fraisForfait)  : LigneFraisForfait
    {
        if(!empty($fraisForfait))
        {
            $this->fraisForfait = $fraisForfait;
        }

        return $this;
    }





}


?>