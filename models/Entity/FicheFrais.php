<?php

class FicheFrais 
{
    private string $idVisiteur;
    private DateTime $mois;
    private int $nbJustificatifs;
    private float $montantValide;
    private DateTime $dateModif;
    private Etat $etat;
    private FicheFrais $ficheFrais;


    public function __construct()   
    {
        
    }


    /**
    * Permet d'obtenir l'identifiant du visiteur.
    * 
    * @return string
    */
    public function getIdVisiteur() : string 
    {
        return $this->idVisiteur;
    }

    /**
    * Permet de définir l'identifiant du visiteur.
    * 
    * @param string $idVisiteur
    * 
    * @return FicheFrais
    */
    public function setIdVisiteur(string $idVisiteur)  : FicheFrais
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
     * @return void
     */
    public function setMois(DateTime $mois) : void 
    {
        $this->mois = $mois;
    }

    /**
     * Permet d'obtenir le nombre de justificatifs
     * 
     * @return int 
     */
    public function getNbJustificatifs() : int
    {
        return $this->nbJustificatifs;
    }

    /**
     * Permet de définir le nombre de justificatifs
     * 
     * @param int $nbJustificatifs
     * 
     * @return void
     */
    public function setNbJustificatifs(int $nbJustificatifs) : void
    {
        $this->nbJustificatifs = $nbJustificatifs;
    }

    /**
     * Permet d'obtenir le montant valide
     * 
     * @return float
     */
    public function getMontantValide() : float 
    {
        return $this->montantValide;
    }

    /**
     * Permet de définir un montant valide 
     * 
     * @param float $montantValide
     * 
     * @return void 
     */
    public function setMontantValide(float $montantValide) : void 
    {
        $this->montantValide = $montantValide;
    }

    /**
     * Permet d'obtenir la date de modification 
     * 
     * @return DateTime
     */
    public function getDateModif() : DateTime 
    {
        return $this->dateModif;
    }

    /**
     * Permet de définir la date de modification 
     * 
     * @param DateTime $dateModif
     * 
     * @return void
     */
    public function setDateModif(DateTime $dateModif) : void 
    {
        $this->dateModif = $dateModif;
    }

    /**
     * Permet d'obtenir la classe etat 
     * 
     * @return Etat 
     */
    public function getEtat() : Etat 
    {
        if (isset($this->etat))
        {
            return $this->etat;
        }
    }

    /**
     * Permet de définir la classe etat 
     * 
     * @param Etat etat 
     * 
     * @return void 
     */
    public function setEtat(Etat $etat) : void 
    {
        $this->etat = $etat;
    }


}

?>