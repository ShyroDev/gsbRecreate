<?php

class Database
{

    private static string $DATABASE_ADRESS = "localhost:3307";
    private static string $DATABASE_NAME = "gsb";
    private static string $DATABASE_USERNAME = "root";
    private static string $DATABASE_PASSWORD = "azertyuiop";
    private static PDO $connexion;




    public function __construct()
    {
        
    }



    public static function init(): bool
    {
        if(!isset(Database::$connexion))
        {
            try
            {
                Database::$connexion =  new PDO("mysql:host=" . Database::$DATABASE_ADRESS . ";dbname=" . Database::$DATABASE_NAME,
                Database::$DATABASE_USERNAME,Database::$DATABASE_PASSWORD
                );
            } 
            catch (PDOException $pdoExeption) 
            {
           
            }

            return false;

        }

        return true;
    }



    
    public static function getConnexion(): PDO | null 
    {
        if(isset(Database::$connexion))
        {
            return Database::$connexion;
        }

        return null;
    }


}

?>