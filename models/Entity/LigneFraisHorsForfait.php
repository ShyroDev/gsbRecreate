<?php

class LigneFraisHorsForfait 
{
    private int $id;
    private string $libelle;
    private DateTime $date;
    private float $montant;
    private FicheFrais $ficheFrais;


    public function __construct()
    {
    }


    /**
     * Permet d'obtenir l'identifiant 
     * 
     * @return int 
     */
    public function getId() : int 
    {
        return $this->id;
    }

    /**
     * Permet de définir l'identifiant 
     * 
     * @param int $id
     * 
     * @return void
     */
    public function setId(int $id) : void 
    {
        $this->id = $id;
    }

    /**
     * Permet d'obtenir le libelle 
     * 
     * @return string 
     */
    public function getLibelle() : string 
    {
        return $this->libelle;
    }

    /**
     * Permet de définir le libelle 
     * 
     * @param string $libelle 
     * 
     * @return void 
     */
    public function setLibelle(string $libelle) : void 
    {
        $this->libelle = $libelle;
    }

    /**
     * Permet d'obtenir la date 
     * 
     * @return DateTime
     */
    public function getDate() : DateTime 
    {
        return $this->date;
    }

    /**
     * Permet de définir la date 
     * 
     * @param DateTime $date
     * 
     * @return void
     */
    public function setDate(DateTime $date) : void 
    {
        $this->date = $date;
    }

    /**
     * Perlet d'obtenir le montant 
     * 
     * @return float 
     */
    public function getMontant() : float 
    {
        return $this->montant;
    }

    /**
     * Permet de définir le montant 
     * 
     * @param float $montant 
     * 
     * @return void 
     */
    public function setMontant(float $montant) : void 
    {
        $this->montant = $montant;
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
}

?>