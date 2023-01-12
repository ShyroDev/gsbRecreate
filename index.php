<?php
session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();

if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];


?>

