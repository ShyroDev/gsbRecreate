<?php

class Etat {

    private string $id;
    private string $libelle;

    public function __construct(string $id, string $libelle)
    {
        $this->id = $id;
        $this->libelle = $libelle;       
    }

    /**
    * Permet d'obtenir l'identifiant de l'etat.
    * 
    * @return string
    */
    public function getId () : string 
    {
        return $this->id;
    }

    /**
    * Permet de définir l'identifiant de l'etat.
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
    * Permet d'obtenir le libelle de l'etat.
    * 
    * @return string
    */
    public function getLibelle() : string 
    {
        return $this->libelle;
    }

    /**
    * Permet de définir le libelle de l'etat.
    * 
    * @param string $libelle
    * 
    * @return void
    */
    public function setLibelle(string $libelle) : void
    {
        $this->libelle = $libelle;
    }
}

?>