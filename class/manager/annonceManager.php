<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 15/03/2019
 * Time: 10:26
 */
require_once '../../database/Database.php';
class annonceManager
{
    private $conn;
    public function __construct()
    {
        $this->conn = Database::connect();
    }

    public function addAnnonce(annonce $annonce)
    {
        $dateEmbauche = $annonce->getDateEmbauche();
        $duree = $annonce->getDuree();
        $expAttendue = $annonce->getExpAttendue();
        $idPoste = $annonce->getIdPoste();
        $idRecruteurEntreprise = $annonce->getIdRecruteurEntreprise();

        $query = "
        INSERT INTO `annonce` (dateEmbauche ,duree,expAttendue,idPoste,idRecruteurEntreprise)
        values(
        '".$dateEmbauche."',
        '".$duree."',
        '".$expAttendue."',
        '".$idPoste."',
        '".$idRecruteurEntreprise."')";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }
    public function getAnnonce($id)
    {
        $sth = $this->conn->prepare("SELECT * FROM `annonce` WHERE `ID` ='".$id."'");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public function getAnnonces()
    {
        $sth = $this->conn->prepare("SELECT * from `annonce`;");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function deleteAnnonce($id)
    {
        $query = "DELETE FROM `annonce` WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    /**
     * @param $id
     * @param User $user
     */
    public function updateAnnonceById($id, annonce $annonce) {
        $query = "
        UPDATE USER
         SET 
         dateEmbauche = '".htmlspecialchars($dateEmbauche = $annonce->getDateEmbauche())."',
         duree = '".htmlspecialchars($duree  = $annonce->getDuree())."',
         expAttendue = '".htmlspecialchars($expAttendue = $annonce->getExpAttendue())."'
         idPoste ='".htmlspecialchars($idPoste= $annonce->getIdPoste())."'
         idRecruteurEntreprise = '".htmlspecialchars($idRecruteurEntreprise = $annonce->getIdRecruteurEntreprise())."'         
         WHERE id = ".htmlspecialchars($id)."
        ";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }
}