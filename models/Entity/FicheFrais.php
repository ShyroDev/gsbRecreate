<?php

class FicheFrais 
{
    private string $idVisiteur;
    private string $mois;
    private int $nbJustificatifs;
    private float $montantValide;
    private DateTime $dateModif;
    private Etat $etat;


    public function __construct(string $idVisiteur, string $mois, int $nbJustificatifs, float $montantValide, DateTime $dateModif, Etat $etat)   
    {
        $this->idVisiteur = $idVisiteur;
        $this->mois = $mois;
        $this->nbJustificatifs = $nbJustificatifs;
        $this->montantValide = $montantValide;
        $this->dateModif = $dateModif;
        $this->etat = $etat;
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
     * @return void
     */
    public function setMois(string $mois) : void 
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