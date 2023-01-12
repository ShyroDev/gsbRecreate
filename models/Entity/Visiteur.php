<?php

class Visiteur 
{
    private string $id;
    private string $nom;
    private string $prenom;
    private string $login;
    private string $password;
    private string $adresse;
    private string $zipcode;
    private string $ville;
    private DateTime $dateEmbauche;

    public function __construct(string $id, string $nom, string $prenom, string $login, string $password, 
    string $adresse, string $zipcode, string $ville, DateTime $dateEmbauche)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->login = $login;
        $this->password = $password;
        $this->adresse = $adresse;
        $this->zipcode = $zipcode;
        $this->ville = $ville;
        $this->dateEmbauche = $dateEmbauche;

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
     * Permet d'obtenir le nom 
     * 
     * @return string 
     */
    public function getNom() : string 
    {
        return $this->nom;
    }

    /**
     * Permet de définir le nom 
     * 
     * @param string $nom
     * 
     * @return void
     */
    public function setNom(string $nom) : void 
    {
        $this->nom = $nom;
    }

    /**
     * Permet d'obtenir le nom 
     * 
     * @return string
     */
    public function getPrenom() : string 
    {
        return $this->prenom;
    }

    /**
     * Permet de définir le nom 
     * 
     * @param string $prenom
     * 
     * @return void 
     */
    public function setPrenom(string $prenom) : void 
    {
        $this->prenom = $prenom;
    }

    /**
     * Permet d'obtenir le login
     * 
     * @return string
     */
    public function getLogin() : string 
    {
        return $this->login;
    }

    /**
     * Permet de définir le login 
     * 
     * @param string $login
     * 
     * @return void
     */
    public function setLogin(string $login) : void 
    {
        $this->login = $login;
    }

    /**
     * Permet d'obtenir le mot de passe 
     * 
     *  @return string 
     */
    public function getPassword() : string 
    {
        return $this->password;
    }

    /**
     * Permet de définir le mot de passe 
     * 
     * @param string $password
     * 
     * @return void
     */
    public function setPassword(string $password) : void 
    {
        $this->password = $password;
    }

    /**
     * Permet d'obtenir l'adresse 
     * 
     * @return string
     */
    public function getAdresse() : string 
    {
        return $this->adresse;
    }

    /**
     * Permet de définir l'adresse 
     * 
     * @param string $adresse
     * 
     * @return void
     */
    public function setAdresse(string $adresse) : void 
    {
        $this->adresse = $adresse;
    }

    /**
     * Permet d'obtenir le zipCode
     * 
     * @return string
     */
    public function getZipCode() : string 
    {
        return $this->zipcode;
    }

    /**
     * Permet de définir le zipCode
     * 
     * @param string $zipcode
     * 
     * @return void
     */
    public function setZipCode(string $zipcode) : void 
    {
        $this->zipcode = $zipcode;
    }

    /**
     * Permet d'obtenir le nom de la ville 
     * 
     * @return string 
     */
    public function getVille() : string 
    {
        return $this->ville;
    }

    /**
     * Permet de définir le nom de la vile 
     * 
     * @param string $ville 
     * 
     * @return void
     */
    public function setVille(string $ville) : void 
    {
        $this->ville = $ville;
    }

    /**
     * Permet d'obtenir la date d'embauche
     * 
     * @return DateTime
     */
    public function getDateEmbauche() : DateTime 
    {
        return $this->dateEmbauche;
    }

    /**
     * Permet de définir la date d'embauche 
     * 
     * @param DateTime $dateEmbauche
     * 
     * @return void 
     */
    public function setDateEmbauche(DateTime $dateEmbauche) : void 
    {
        $this->dateEmbauche = $dateEmbauche;
    }
}

?>