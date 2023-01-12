<?php 

class FraisForfait 
{
    private string $id;
    private string $libelle;
    private float $montant;


    public function __construct(string $id, string $libelle, float $montant)
    {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->montant = $montant;
    }


    /**
     * Permet d'obtenir l'identifiant 
     * 
     * @return string
     */
    public function getId() : string 
    {
        return $this->id;
    }

    /**
     * Permet de définir l'identifiant 
     * 
     * @param string $id
     * 
     * @return void
     */
    public function setId(string $id) : void 
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
     * Permet d'obtenir le montant 
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
}

?>