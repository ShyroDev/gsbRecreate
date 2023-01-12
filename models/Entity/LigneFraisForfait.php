<?php 

class LigneFraisForfait 
{
    private string $idVisiteur;
    private string $mois;
    private int $quantite;
    private FicheFrais $ficheFrais;
    private FraisForfait $fraisForfait;


    public function __construct(string $idVisiteur, string $mois, int $quantite, FicheFrais $ficheFrais, FraisForfait $fraisForfait)
    {
        $this->idVisiteur = $idVisiteur;
        $this->mois = $mois;
        $this->quantite = $quantite;
        $this->ficheFrais = $ficheFrais;
        $this->fraisForfait = $fraisForfait;

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
     * @return void
     */
    public function setIdVisiteur(string $idVisiteur) : void
    {
        $this->idVisiteur = $idVisiteur;
    }

    /**
     * Permet d'obtenir le mois 
     * 
     * @return string 
     */
    public function getMois() : string 
    {
        return $this->mois;
    }

    /**
     * Permet de définir le mois
     * 
     * @param string $mois
     * 
     *@return void
     */
    public function setMois(string $mois) : void 
    {
        $this->mois = $mois; 
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
     * @return void 
     */
    public function setFraisForfait(FraisForfait $fraisForfait) : void 
    {
        $this->fraisForfait = $fraisForfait;
    }





}


?>