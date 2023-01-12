<?php

class VisiteurRepository 
{
    public function visiteur(string $login,string $password) : array
    {
        $visiteurData = ("SELECT Visiteur.id as id, Visiteur.nom as nom, Visiteur.prenom as prenom FROM Visiteur 
        WHERE Visiteur.login = ? and Visiteur.password = ?");

        $conexxion = Database::getConnexion();

        if(isset($conexxion)) 
        {
            $visiteurData = $conexxion->prepare($visiteurData);

            if($visiteurData !== false) 
            {
                $visiteurData->execute([$login, $password]);
                return $visiteurData->fetch(PDO::FETCH_ASSOC);
            }
        }  

        return array();
    }
}

?>









